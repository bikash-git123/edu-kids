<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::with('teacher');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('code', 'like', "%{$search}%")
                  ->orWhere('department', 'like', "%{$search}%");
            });
        }

        if ($request->filled('department')) {
            $query->where('department', $request->department);
        }

        $courses = $query->latest()->paginate(10);
        $departments = Course::select('department')->distinct()->pluck('department');

        return view('admin.courses.index', compact('courses', 'departments'));
    }

    public function create()
    {
        $teachers = Teacher::where('status', 'active')->get();
        return view('admin.courses.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|unique:courses,code',
            'name' => 'required|string|max:150',
            'department' => 'required|string|max:100',
            'credits' => 'required|integer|min:1|max:10',
            'teacher_id' => 'nullable|exists:teachers,id',
            'description' => 'nullable|string',
            'status' => 'required|in:active,archived',
        ]);

        Course::create($validated);

        return redirect()->route('admin.courses.index')
            ->with('success', 'Course catalog updated successfully.');
    }

    public function edit(Course $course)
    {
        $teachers = Teacher::where('status', 'active')->get();
        return view('admin.courses.edit', compact('course', 'teachers'));
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'code' => 'required|unique:courses,code,' . $course->id,
            'name' => 'required|string|max:150',
            'department' => 'required|string|max:100',
            'credits' => 'required|integer|min:1|max:10',
            'teacher_id' => 'nullable|exists:teachers,id',
            'description' => 'nullable|string',
            'status' => 'required|in:active,archived',
        ]);

        $course->update($validated);

        return redirect()->route('admin.courses.index')
            ->with('success', 'Course information updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('admin.courses.index')
            ->with('success', 'Course deleted successfully.');
    }
}
