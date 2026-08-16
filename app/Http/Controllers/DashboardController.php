<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Notice;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalStudents = Student::count();
        $totalTeachers = Teacher::count();
        $totalCourses = Course::count();
        $totalNotices = Notice::where('status', 'published')->count();

        $recentStudents = Student::latest()->take(5)->get();
        $recentNotices = Notice::latest('posted_at')->take(5)->get();
        $recentTeachers = Teacher::latest()->take(5)->get();

        // Department stats for charts
        $departmentStats = Student::selectRaw('department, count(*) as count')
            ->groupBy('department')
            ->pluck('count', 'department')
            ->toArray();

        return view('admin.dashboard', compact(
            'totalStudents',
            'totalTeachers',
            'totalCourses',
            'totalNotices',
            'recentStudents',
            'recentNotices',
            'recentTeachers',
            'departmentStats'
        ));
    }
}
