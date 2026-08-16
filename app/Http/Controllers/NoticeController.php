<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function index(Request $request)
    {
        $query = Notice::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }

        if ($request->filled('priority')) {
            $query->where('priority', $request->priority);
        }

        if ($request->filled('target_audience')) {
            $query->where('target_audience', $request->target_audience);
        }

        $notices = $query->latest('posted_at')->paginate(10);

        return view('admin.notices.index', compact('notices'));
    }

    public function create()
    {
        return view('admin.notices.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'content' => 'required|string',
            'target_audience' => 'required|in:All,Students,Teachers,Staff',
            'priority' => 'required|in:Normal,High,Urgent',
            'status' => 'required|in:published,draft,archived',
            'posted_at' => 'required|date',
        ]);

        Notice::create($validated);

        return redirect()->route('admin.notices.index')
            ->with('success', 'Announcement published successfully.');
    }

    public function show(Notice $notice)
    {
        return view('admin.notices.show', compact('notice'));
    }

    public function edit(Notice $notice)
    {
        return view('admin.notices.edit', compact('notice'));
    }

    public function update(Request $request, Notice $notice)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'content' => 'required|string',
            'target_audience' => 'required|in:All,Students,Teachers,Staff',
            'priority' => 'required|in:Normal,High,Urgent',
            'status' => 'required|in:published,draft,archived',
            'posted_at' => 'required|date',
        ]);

        $notice->update($validated);

        return redirect()->route('admin.notices.index')
            ->with('success', 'Announcement updated successfully.');
    }

    public function destroy(Notice $notice)
    {
        $notice->delete();

        return redirect()->route('admin.notices.index')
            ->with('success', 'Announcement deleted successfully.');
    }
}
