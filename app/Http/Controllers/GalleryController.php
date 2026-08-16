<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $query = Gallery::withCount('images')->with(['images' => function($q) {
            $q->orderBy('sort_order', 'asc');
        }]);

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $galleries = $query->latest('event_date')->paginate(9);

        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'nullable|date',
            'description' => 'nullable|string',
            'status' => 'required|in:active,archived',
            'images.*.file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'images.*.title' => 'nullable|string|max:255',
            'images.*.description' => 'nullable|string',
        ]);

        $gallery = Gallery::create([
            'title' => $validated['title'],
            'event_date' => $validated['event_date'] ?? null,
            'description' => $validated['description'] ?? null,
            'status' => $validated['status'] ?? 'active',
        ]);

        // Process uploaded images
        if ($request->has('images')) {
            foreach ($request->images as $index => $imgData) {
                $imagePath = null;
                if (isset($imgData['file']) && $imgData['file']->isValid()) {
                    $file = $imgData['file'];
                    $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('uploads/gallery'), $filename);
                    $imagePath = 'uploads/gallery/' . $filename;
                }

                if ($imagePath) {
                    GalleryImage::create([
                        'gallery_id' => $gallery->id,
                        'image_path' => $imagePath,
                        'title' => $imgData['title'] ?? null,
                        'description' => $imgData['description'] ?? null,
                        'sort_order' => $index + 1,
                    ]);
                }
            }
        }

        return redirect()->route('admin.galleries.show', $gallery)
            ->with('success', 'Gallery event "' . $gallery->title . '" created successfully.');
    }

    public function show(Gallery $gallery)
    {
        $gallery->load('images');
        return view('admin.galleries.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        $gallery->load('images');
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'nullable|date',
            'description' => 'nullable|string',
            'status' => 'required|in:active,archived',
            'existing_images.*.title' => 'nullable|string|max:255',
            'existing_images.*.description' => 'nullable|string',
            'new_images.*.file' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'new_images.*.title' => 'nullable|string|max:255',
            'new_images.*.description' => 'nullable|string',
        ]);

        $gallery->update([
            'title' => $validated['title'],
            'event_date' => $validated['event_date'] ?? null,
            'description' => $validated['description'] ?? null,
            'status' => $validated['status'] ?? 'active',
        ]);

        // Update existing images optional title & description
        if ($request->has('existing_images')) {
            foreach ($request->existing_images as $imageId => $imgMeta) {
                $image = GalleryImage::where('gallery_id', $gallery->id)->find($imageId);
                if ($image) {
                    $image->update([
                        'title' => $imgMeta['title'] ?? null,
                        'description' => $imgMeta['description'] ?? null,
                    ]);
                }
            }
        }

        // Add new images
        if ($request->has('new_images')) {
            $currentMaxOrder = $gallery->images()->max('sort_order') ?? 0;
            foreach ($request->new_images as $index => $imgData) {
                if (isset($imgData['file']) && $imgData['file']->isValid()) {
                    $file = $imgData['file'];
                    $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('uploads/gallery'), $filename);
                    $imagePath = 'uploads/gallery/' . $filename;

                    GalleryImage::create([
                        'gallery_id' => $gallery->id,
                        'image_path' => $imagePath,
                        'title' => $imgData['title'] ?? null,
                        'description' => $imgData['description'] ?? null,
                        'sort_order' => $currentMaxOrder + $index + 1,
                    ]);
                }
            }
        }

        return redirect()->route('admin.galleries.show', $gallery)
            ->with('success', 'Gallery updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        // Delete image files from public/uploads/gallery
        foreach ($gallery->images as $image) {
            if (file_exists(public_path($image->image_path)) && str_contains($image->image_path, 'uploads/gallery')) {
                @unlink(public_path($image->image_path));
            }
        }

        $gallery->delete();

        return redirect()->route('admin.galleries.index')
            ->with('success', 'Gallery event deleted successfully.');
    }

    public function deleteImage(GalleryImage $image)
    {
        $galleryId = $image->gallery_id;
        if (file_exists(public_path($image->image_path)) && str_contains($image->image_path, 'uploads/gallery')) {
            @unlink(public_path($image->image_path));
        }

        $image->delete();

        return redirect()->route('admin.galleries.edit', $galleryId)
            ->with('success', 'Image removed from gallery.');
    }
}
