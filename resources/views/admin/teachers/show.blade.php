@extends('layouts.app')

@section('title', 'Faculty Profile - ' . $teacher->name)

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Faculty Profile</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="{{ route('admin.teachers.index') }}">Faculty</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Profile</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="card card-profile">
      <div class="card-header bg-info text-white text-center py-4">
        <div class="avatar avatar-xxl mb-3">
          <span class="avatar-title rounded-circle bg-white text-info fw-bold fs-1">
            {{ substr($teacher->name, 0, 1) }}
          </span>
        </div>
        <h3 class="mb-0 fw-bold">{{ $teacher->name }}</h3>
        <p class="mb-0 text-white-50">{{ $teacher->designation }}</p>
      </div>
      <div class="card-body text-center">
        <div class="desc mb-3">
          <span class="badge bg-primary fs-6">{{ $teacher->department }}</span>
        </div>
        <a href="{{ route('admin.teachers.edit', $teacher) }}" class="btn btn-secondary btn-block">
          <i class="fas fa-edit me-1"></i> Edit Profile
        </a>
      </div>
    </div>
  </div>

  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0">Faculty Details &amp; Courses Taught</h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered mb-4">
          <tr>
            <th width="35%" class="bg-light">Employee ID</th>
            <td><code>{{ $teacher->employee_id }}</code></td>
          </tr>
          <tr>
            <th class="bg-light">Full Name</th>
            <td>{{ $teacher->name }}</td>
          </tr>
          <tr>
            <th class="bg-light">Email Address</th>
            <td><a href="mailto:{{ $teacher->email }}">{{ $teacher->email }}</a></td>
          </tr>
          <tr>
            <th class="bg-light">Phone</th>
            <td>{{ $teacher->phone ?? 'N/A' }}</td>
          </tr>
          <tr>
            <th class="bg-light">Qualification</th>
            <td>{{ $teacher->qualification }}</td>
          </tr>
          <tr>
            <th class="bg-light">Department</th>
            <td>{{ $teacher->department }}</td>
          </tr>
          <tr>
            <th class="bg-light">Joining Date</th>
            <td>{{ $teacher->joining_date ? \Carbon\Carbon::parse($teacher->joining_date)->format('F d, Y') : 'N/A' }}</td>
          </tr>
          <tr>
            <th class="bg-light">Status</th>
            <td><span class="badge bg-success text-uppercase">{{ $teacher->status }}</span></td>
          </tr>
        </table>

        <h5 class="fw-bold mb-3"><i class="fas fa-book me-2 text-primary"></i>Assigned Courses ({{ $teacher->courses->count() }})</h5>
        <div class="table-responsive">
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th>Code</th>
                <th>Course Title</th>
                <th>Department</th>
                <th>Credits</th>
              </tr>
            </thead>
            <tbody>
              @forelse($teacher->courses as $course)
                <tr>
                  <td><code>{{ $course->code }}</code></td>
                  <td class="fw-bold">{{ $course->name }}</td>
                  <td>{{ $course->department }}</td>
                  <td>{{ $course->credits }} Hrs</td>
                </tr>
              @empty
                <tr>
                  <td colspan="4" class="text-muted">No courses currently assigned to this faculty member.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <div class="mt-4">
          <a href="{{ route('admin.teachers.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back to Faculty List
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
