@extends('layouts.app')

@section('title', 'Student Details - ' . $student->full_name)

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Student Profile</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="{{ route('admin.students.index') }}">Students</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Profile</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="card card-profile">
      <div class="card-header bg-primary text-white text-center py-4">
        <div class="avatar avatar-xxl mb-3">
          <span class="avatar-title rounded-circle bg-white text-primary fw-bold fs-1">
            {{ substr($student->first_name, 0, 1) }}
          </span>
        </div>
        <h3 class="mb-0 fw-bold">{{ $student->full_name }}</h3>
        <p class="mb-0 text-white-50">{{ $student->student_code }}</p>
      </div>
      <div class="card-body">
        <div class="user-profile text-center">
          <div class="desc mb-3">
            <span class="badge bg-info fs-6">{{ $student->department }}</span>
          </div>
          <div class="view-profile">
            <a href="{{ route('admin.students.edit', $student) }}" class="btn btn-secondary btn-block">
              <i class="fas fa-edit me-1"></i> Edit Student Profile
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0">Academic &amp; Personal Details</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tr>
            <th width="35%" class="bg-light">Student ID / Code</th>
            <td><code>{{ $student->student_code }}</code></td>
          </tr>
          <tr>
            <th class="bg-light">First Name</th>
            <td>{{ $student->first_name }}</td>
          </tr>
          <tr>
            <th class="bg-light">Last Name</th>
            <td>{{ $student->last_name }}</td>
          </tr>
          <tr>
            <th class="bg-light">Email Address</th>
            <td><a href="mailto:{{ $student->email }}">{{ $student->email }}</a></td>
          </tr>
          <tr>
            <th class="bg-light">Phone Number</th>
            <td>{{ $student->phone ?? 'N/A' }}</td>
          </tr>
          <tr>
            <th class="bg-light">Gender</th>
            <td>{{ $student->gender }}</td>
          </tr>
          <tr>
            <th class="bg-light">Date of Birth</th>
            <td>{{ $student->dob ? \Carbon\Carbon::parse($student->dob)->format('F d, Y') : 'N/A' }}</td>
          </tr>
          <tr>
            <th class="bg-light">Department</th>
            <td>{{ $student->department }}</td>
          </tr>
          <tr>
            <th class="bg-light">Grade / Class Level</th>
            <td>{{ $student->grade_level }}</td>
          </tr>
          <tr>
            <th class="bg-light">Status</th>
            <td>
              <span class="badge bg-success text-uppercase">{{ $student->status }}</span>
            </td>
          </tr>
          <tr>
            <th class="bg-light">Residential Address</th>
            <td>{{ $student->address ?? 'Not provided' }}</td>
          </tr>
        </table>

        <div class="mt-3">
          <a href="{{ route('admin.students.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back to Students List
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
