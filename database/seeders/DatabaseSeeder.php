<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Course;
use App\Models\Notice;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Default Admin
        User::updateOrCreate(
            ['email' => 'admin@school.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'avatar' => 'assets/img/profile.jpg',
            ]
        );

        // 2. Create Teachers
        $teachersData = [
            [
                'employee_id' => 'EMP-1001',
                'name' => 'Dr. Robert Miller',
                'email' => 'robert.miller@school.edu',
                'phone' => '+1 (555) 234-5678',
                'qualification' => 'Ph.D. in Computer Science',
                'department' => 'Computer Science',
                'designation' => 'Professor',
                'joining_date' => '2019-08-15',
                'status' => 'active',
            ],
            [
                'employee_id' => 'EMP-1002',
                'name' => 'Prof. Sarah Jenkins',
                'email' => 'sarah.jenkins@school.edu',
                'phone' => '+1 (555) 345-6789',
                'qualification' => 'M.S. in Mathematics',
                'department' => 'Mathematics',
                'designation' => 'Associate Professor',
                'joining_date' => '2020-01-10',
                'status' => 'active',
            ],
            [
                'employee_id' => 'EMP-1003',
                'name' => 'Dr. James Anderson',
                'email' => 'james.anderson@school.edu',
                'phone' => '+1 (555) 456-7890',
                'qualification' => 'Ph.D. in Business Administration',
                'department' => 'Business',
                'designation' => 'Professor',
                'joining_date' => '2018-09-01',
                'status' => 'active',
            ],
            [
                'employee_id' => 'EMP-1004',
                'name' => 'Emily Watson',
                'email' => 'emily.watson@school.edu',
                'phone' => '+1 (555) 567-8901',
                'qualification' => 'M.A. in English Literature',
                'department' => 'Humanities',
                'designation' => 'Lecturer',
                'joining_date' => '2021-03-20',
                'status' => 'active',
            ],
            [
                'employee_id' => 'EMP-1005',
                'name' => 'Dr. Michael Chang',
                'email' => 'michael.chang@school.edu',
                'phone' => '+1 (555) 678-9012',
                'qualification' => 'Ph.D. in Electrical Engineering',
                'department' => 'Engineering',
                'designation' => 'Associate Professor',
                'joining_date' => '2017-11-05',
                'status' => 'active',
            ],
            [
                'employee_id' => 'EMP-1006',
                'name' => 'Laura Vance',
                'email' => 'laura.vance@school.edu',
                'phone' => '+1 (555) 789-0123',
                'qualification' => 'M.Sc. Physics',
                'department' => 'Science',
                'designation' => 'Assistant Professor',
                'joining_date' => '2022-02-14',
                'status' => 'active',
            ],
        ];

        $createdTeachers = [];
        foreach ($teachersData as $tData) {
            $createdTeachers[] = Teacher::create($tData);
        }

        // 3. Create Courses
        $coursesData = [
            [
                'code' => 'CS-101',
                'name' => 'Introduction to Programming',
                'department' => 'Computer Science',
                'credits' => 4,
                'teacher_id' => $createdTeachers[0]->id,
                'description' => 'Fundamental concepts of programming using Python and C++.',
                'status' => 'active',
            ],
            [
                'code' => 'CS-202',
                'name' => 'Data Structures & Algorithms',
                'department' => 'Computer Science',
                'credits' => 4,
                'teacher_id' => $createdTeachers[0]->id,
                'description' => 'Arrays, linked lists, trees, graphs, sorting and searching techniques.',
                'status' => 'active',
            ],
            [
                'code' => 'MATH-201',
                'name' => 'Calculus & Linear Algebra',
                'department' => 'Mathematics',
                'credits' => 3,
                'teacher_id' => $createdTeachers[1]->id,
                'description' => 'Matrices, vector spaces, differential and integral calculus.',
                'status' => 'active',
            ],
            [
                'code' => 'BUS-301',
                'name' => 'Principles of Management',
                'department' => 'Business',
                'credits' => 3,
                'teacher_id' => $createdTeachers[2]->id,
                'description' => 'Overview of corporate governance, organizational behavior and leadership.',
                'status' => 'active',
            ],
            [
                'code' => 'ENG-101',
                'name' => 'Academic Writing & Communication',
                'department' => 'Humanities',
                'credits' => 2,
                'teacher_id' => $createdTeachers[3]->id,
                'description' => 'Developing critical writing, synthesis, and public presentation skills.',
                'status' => 'active',
            ],
            [
                'code' => 'EE-105',
                'name' => 'Circuit Theory & Analysis',
                'department' => 'Engineering',
                'credits' => 4,
                'teacher_id' => $createdTeachers[4]->id,
                'description' => 'DC/AC circuits, Kirchhoff laws, operational amplifiers, and signal flow.',
                'status' => 'active',
            ],
        ];

        foreach ($coursesData as $cData) {
            Course::create($cData);
        }

        // 4. Create Students
        $studentsData = [
            [
                'student_code' => 'STD-2024-001',
                'first_name' => 'Alexander',
                'last_name' => 'Wright',
                'email' => 'alex.wright@student.school.edu',
                'phone' => '+1 (555) 101-2001',
                'gender' => 'Male',
                'dob' => '2004-05-12',
                'grade_level' => 'Year 2 (Sophomore)',
                'department' => 'Computer Science',
                'address' => '742 Evergreen Terrace, Springfield',
                'status' => 'active',
            ],
            [
                'student_code' => 'STD-2024-002',
                'first_name' => 'Sophia',
                'last_name' => 'Martinez',
                'email' => 'sophia.martinez@student.school.edu',
                'phone' => '+1 (555) 101-2002',
                'gender' => 'Female',
                'dob' => '2005-09-24',
                'grade_level' => 'Year 1 (Freshman)',
                'department' => 'Computer Science',
                'address' => '123 Elm Street, Metropolis',
                'status' => 'active',
            ],
            [
                'student_code' => 'STD-2024-003',
                'first_name' => 'Ethan',
                'last_name' => 'Brooks',
                'email' => 'ethan.brooks@student.school.edu',
                'phone' => '+1 (555) 101-2003',
                'gender' => 'Male',
                'dob' => '2003-11-05',
                'grade_level' => 'Year 3 (Junior)',
                'department' => 'Business',
                'address' => '456 Oak Lane, Gotham',
                'status' => 'active',
            ],
            [
                'student_code' => 'STD-2024-004',
                'first_name' => 'Olivia',
                'last_name' => 'Taylor',
                'email' => 'olivia.taylor@student.school.edu',
                'phone' => '+1 (555) 101-2004',
                'gender' => 'Female',
                'dob' => '2004-03-18',
                'grade_level' => 'Year 2 (Sophomore)',
                'department' => 'Engineering',
                'address' => '890 Maple Drive, Star City',
                'status' => 'active',
            ],
            [
                'student_code' => 'STD-2024-005',
                'first_name' => 'Lucas',
                'last_name' => 'Nguyen',
                'email' => 'lucas.nguyen@student.school.edu',
                'phone' => '+1 (555) 101-2005',
                'gender' => 'Male',
                'dob' => '2002-07-30',
                'grade_level' => 'Year 4 (Senior)',
                'department' => 'Computer Science',
                'address' => '321 Pine Avenue, Central City',
                'status' => 'active',
            ],
            [
                'student_code' => 'STD-2024-006',
                'first_name' => 'Emma',
                'last_name' => 'Johnson',
                'email' => 'emma.johnson@student.school.edu',
                'phone' => '+1 (555) 101-2006',
                'gender' => 'Female',
                'dob' => '2005-01-15',
                'grade_level' => 'Year 1 (Freshman)',
                'department' => 'Humanities',
                'address' => '654 Birch Road, Coast City',
                'status' => 'active',
            ],
            [
                'student_code' => 'STD-2024-007',
                'first_name' => 'Noah',
                'last_name' => 'Davis',
                'email' => 'noah.davis@student.school.edu',
                'phone' => '+1 (555) 101-2007',
                'gender' => 'Male',
                'dob' => '2004-08-08',
                'grade_level' => 'Year 2 (Sophomore)',
                'department' => 'Mathematics',
                'address' => '987 Cedar Boulevard, Keystone',
                'status' => 'active',
            ],
            [
                'student_code' => 'STD-2024-008',
                'first_name' => 'Ava',
                'last_name' => 'Wilson',
                'email' => 'ava.wilson@student.school.edu',
                'phone' => '+1 (555) 101-2008',
                'gender' => 'Female',
                'dob' => '2003-12-22',
                'grade_level' => 'Year 3 (Junior)',
                'department' => 'Business',
                'address' => '159 Walnut Street, Bludhaven',
                'status' => 'active',
            ],
            [
                'student_code' => 'STD-2024-009',
                'first_name' => 'Liam',
                'last_name' => 'Patel',
                'email' => 'liam.patel@student.school.edu',
                'phone' => '+1 (555) 101-2009',
                'gender' => 'Male',
                'dob' => '2005-04-10',
                'grade_level' => 'Year 1 (Freshman)',
                'department' => 'Engineering',
                'address' => '753 Chestnut Way, Midway City',
                'status' => 'active',
            ],
            [
                'student_code' => 'STD-2024-010',
                'first_name' => 'Isabella',
                'last_name' => 'Garcia',
                'email' => 'isabella.garcia@student.school.edu',
                'phone' => '+1 (555) 101-2010',
                'gender' => 'Female',
                'dob' => '2004-06-29',
                'grade_level' => 'Year 2 (Sophomore)',
                'department' => 'Computer Science',
                'address' => '357 Spruce Court, Smallville',
                'status' => 'active',
            ],
        ];

        foreach ($studentsData as $sData) {
            Student::create($sData);
        }

        // 5. Create Notices
        $noticesData = [
            [
                'title' => 'Mid-Term Examination Schedule Released',
                'content' => 'The complete schedule for the upcoming Mid-Term Examinations is now available. Students are requested to download their admit cards from the portal.',
                'target_audience' => 'Students',
                'priority' => 'High',
                'status' => 'published',
                'posted_at' => now()->subDays(2)->format('Y-m-d'),
            ],
            [
                'title' => 'Annual Science & Innovation Symposium 2026',
                'content' => 'Registration is now open for the Annual Science & Innovation Symposium. Submissions for research project presentations are due by next Friday.',
                'target_audience' => 'All',
                'priority' => 'Normal',
                'status' => 'published',
                'posted_at' => now()->subDays(5)->format('Y-m-d'),
            ],
            [
                'title' => 'Faculty Orientation Workshop on Digital Tools',
                'content' => 'All teaching faculty members are invited to attend the interactive workshop on modern LMS tools scheduled in Auditorium B at 10:00 AM.',
                'target_audience' => 'Teachers',
                'priority' => 'Normal',
                'status' => 'published',
                'posted_at' => now()->subDays(7)->format('Y-m-d'),
            ],
            [
                'title' => 'Campus Library Extended Hours During Exams',
                'content' => 'In view of the upcoming exams, the main Central Library will remain open until 11:00 PM on all weekdays.',
                'target_audience' => 'Students',
                'priority' => 'Normal',
                'status' => 'published',
                'posted_at' => now()->subDays(10)->format('Y-m-d'),
            ],
            [
                'title' => 'Urgent: Campus Network Maintenance Notice',
                'content' => 'Scheduled maintenance will be performed on the campus Wi-Fi network this Saturday from 2:00 AM to 6:00 AM.',
                'target_audience' => 'All',
                'priority' => 'Urgent',
                'status' => 'published',
                'posted_at' => now()->subDay()->format('Y-m-d'),
            ],
        ];

        foreach ($noticesData as $nData) {
            Notice::create($nData);
        }

        // 6. Create Sample Gallery Events & Images
        $gallery1 = Gallery::create([
            'title' => 'Independence Day Celebration',
            'event_date' => '2025-08-15',
            'description' => 'Glimpses of the 79th Independence Day flag hoisting, march past parade, and cultural programs held at the main campus ground.',
            'status' => 'active',
        ]);

        GalleryImage::create([
            'gallery_id' => $gallery1->id,
            'image_path' => 'assets/img/examples/example1.jpeg',
            'title' => 'Flag Hoisting Ceremony',
            'description' => 'Principal and Chief Guest hoisting the National Flag at 8:00 AM in the main quadrangle.',
            'sort_order' => 1,
        ]);

        GalleryImage::create([
            'gallery_id' => $gallery1->id,
            'image_path' => 'assets/img/examples/example2.jpeg',
            'title' => 'Cultural Performance by Students',
            'description' => 'Patriotic song ensemble and traditional dance performance by senior students.',
            'sort_order' => 2,
        ]);

        GalleryImage::create([
            'gallery_id' => $gallery1->id,
            'image_path' => 'assets/img/examples/example3.jpeg',
            'title' => 'March Past & Parade',
            'description' => 'Cadets leading the marching contingents during the morning parade.',
            'sort_order' => 3,
        ]);

        $gallery2 = Gallery::create([
            'title' => 'Annual Sports Gala 2026',
            'event_date' => '2026-02-10',
            'description' => 'Annual intra-college athletic track meet, relay races, and championship trophy ceremony.',
            'status' => 'active',
        ]);

        GalleryImage::create([
            'gallery_id' => $gallery2->id,
            'image_path' => 'assets/img/examples/example4.jpeg',
            'title' => '100m Track Sprint Final',
            'description' => 'Senior division track athletes competing in the final 100-meter dash.',
            'sort_order' => 1,
        ]);

        GalleryImage::create([
            'gallery_id' => $gallery2->id,
            'image_path' => 'assets/img/examples/example5.jpeg',
            'title' => 'Championship Trophy Ceremony',
            'description' => 'Overall championship trophy awarded to the victorious Blue House squad.',
            'sort_order' => 2,
        ]);

        $gallery3 = Gallery::create([
            'title' => 'Campus Science & Robotics Exhibition',
            'event_date' => '2026-01-20',
            'description' => 'Innovative engineering projects, robotics demonstrations, and science models built by students.',
            'status' => 'active',
        ]);

        GalleryImage::create([
            'gallery_id' => $gallery3->id,
            'image_path' => 'assets/img/examples/example6.jpeg',
            'title' => 'Autonomous Robotics Display',
            'description' => 'Student team presenting their obstacle avoidance AI rover model.',
            'sort_order' => 1,
        ]);
    }
}
