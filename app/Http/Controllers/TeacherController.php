<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $query = Teacher::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('employee_id', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('qualification', 'like', "%{$search}%");
            });
        }

        if ($request->filled('department')) {
            $query->where('department', $request->department);
        }

        $teachers = $query->withCount('courses')->latest()->paginate(10);
        $departments = Teacher::select('department')->distinct()->pluck('department');

        return view('admin.teachers.index', compact('teachers', 'departments'));
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => 'required|unique:teachers,employee_id',
            'name' => 'required|string|max:150',
            'email' => 'required|email|unique:teachers,email',
            'phone' => 'nullable|string|max:50',
            'qualification' => 'required|string|max:150',
            'department' => 'required|string|max:100',
            'designation' => 'required|string|max:100',
            'joining_date' => 'nullable|date',
            'status' => 'required|in:active,on_leave,inactive',
        ]);

        Teacher::create($validated);

        return redirect()->route('admin.teachers.index')
            ->with('success', 'Faculty member added successfully.');
    }

    public function show(Teacher $teacher)
    {
        $teacher->load('courses');
        return view('admin.teachers.show', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            'employee_id' => 'required|unique:teachers,employee_id,' . $teacher->id,
            'name' => 'required|string|max:150',
            'email' => 'required|email|unique:teachers,email,' . $teacher->id,
            'phone' => 'nullable|string|max:50',
            'qualification' => 'required|string|max:150',
            'department' => 'required|string|max:100',
            'designation' => 'required|string|max:100',
            'joining_date' => 'nullable|date',
            'status' => 'required|in:active,on_leave,inactive',
        ]);

        $teacher->update($validated);

        return redirect()->route('admin.teachers.index')
            ->with('success', 'Faculty member details updated successfully.');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('admin.teachers.index')
            ->with('success', 'Faculty member deleted successfully.');
    }
}
