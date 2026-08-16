<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $query = Student::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('student_code', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        if ($request->filled('department')) {
            $query->where('department', $request->department);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $students = $query->latest()->paginate(10);
        $departments = Student::select('department')->distinct()->pluck('department');

        return view('admin.students.index', compact('students', 'departments'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_code' => 'required|unique:students,student_code',
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:students,email',
            'phone' => 'nullable|string|max:50',
            'gender' => 'required|in:Male,Female,Other',
            'dob' => 'nullable|date',
            'grade_level' => 'required|string|max:100',
            'department' => 'required|string|max:100',
            'address' => 'nullable|string',
            'status' => 'required|in:active,graduated,suspended,inactive',
        ]);

        Student::create($validated);

        return redirect()->route('admin.students.index')
            ->with('success', 'Student record created successfully.');
    }

    public function show(Student $student)
    {
        return view('admin.students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'student_code' => 'required|unique:students,student_code,' . $student->id,
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'nullable|string|max:50',
            'gender' => 'required|in:Male,Female,Other',
            'dob' => 'nullable|date',
            'grade_level' => 'required|string|max:100',
            'department' => 'required|string|max:100',
            'address' => 'nullable|string',
            'status' => 'required|in:active,graduated,suspended,inactive',
        ]);

        $student->update($validated);

        return redirect()->route('admin.students.index')
            ->with('success', 'Student information updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('admin.students.index')
            ->with('success', 'Student record deleted successfully.');
    }
}
