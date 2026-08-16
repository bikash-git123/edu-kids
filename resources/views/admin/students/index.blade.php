@extends('layouts.app')

@section('title', 'Students Management')

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Students Directory</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home">
      <a href="{{ route('admin.dashboard') }}">
        <i class="icon-home"></i>
      </a>
    </li>
    <li class="separator">
      <i class="icon-arrow-right"></i>
    </li>
    <li class="nav-item">
      <a href="#">Management</a>
    </li>
    <li class="separator">
      <i class="icon-arrow-right"></i>
    </li>
    <li class="nav-item">
      <a href="#">Students</a>
    </li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title mb-0">Registered Student Records</h4>
        <a href="{{ route('admin.students.create') }}" class="btn btn-primary btn-round ms-auto">
          <i class="fa fa-plus me-1"></i> Add New Student
        </a>
      </div>

      <div class="card-body">
        <!-- Filter Form -->
        <form method="GET" action="{{ route('admin.students.index') }}" class="row g-3 mb-4">
          <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="Search by Code, Name, Email..." value="{{ request('search') }}">
          </div>
          <div class="col-md-3">
            <select name="department" class="form-select">
              <option value="">-- All Departments --</option>
              @foreach($departments as $dept)
                <option value="{{ $dept }}" {{ request('department') == $dept ? 'selected' : '' }}>{{ $dept }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-3">
            <select name="status" class="form-select">
              <option value="">-- All Statuses --</option>
              <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
              <option value="graduated" {{ request('status') == 'graduated' ? 'selected' : '' }}>Graduated</option>
              <option value="suspended" {{ request('status') == 'suspended' ? 'selected' : '' }}>Suspended</option>
              <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
          </div>
          <div class="col-md-2 d-flex gap-2">
            <button type="submit" class="btn btn-secondary w-100"><i class="fas fa-filter me-1"></i> Filter</button>
            <a href="{{ route('admin.students.index') }}" class="btn btn-light" title="Reset"><i class="fas fa-undo"></i></a>
          </div>
        </form>

        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead class="table-dark">
              <tr>
                <th>Student Code</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Grade Level</th>
                <th>Gender</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse($students as $student)
                <tr>
                  <td><code>{{ $student->student_code }}</code></td>
                  <td class="fw-bold">{{ $student->full_name }}</td>
                  <td>{{ $student->email }}</td>
                  <td><span class="badge bg-info">{{ $student->department }}</span></td>
                  <td>{{ $student->grade_level }}</td>
                  <td>{{ $student->gender }}</td>
                  <td>
                    @if($student->status == 'active')
                      <span class="badge bg-success">Active</span>
                    @elseif($student->status == 'graduated')
                      <span class="badge bg-primary">Graduated</span>
                    @elseif($student->status == 'suspended')
                      <span class="badge bg-danger">Suspended</span>
                    @else
                      <span class="badge bg-secondary">Inactive</span>
                    @endif
                  </td>
                  <td class="text-center">
                    <div class="btn-group" role="group">
                      <a href="{{ route('admin.students.show', $student) }}" class="btn btn-link btn-info btn-lg p-1" title="View Profile">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.students.edit', $student) }}" class="btn btn-link btn-primary btn-lg p-1" title="Edit Student">
                        <i class="fa fa-edit"></i>
                      </a>
                      <form action="{{ route('admin.students.destroy', $student) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this student?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link btn-danger btn-lg p-1" title="Delete Student">
                          <i class="fa fa-times"></i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="8" class="text-center py-4 text-muted">
                    <i class="fas fa-folder-open fa-2x mb-2 d-block"></i> No student records found.
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <div class="d-flex justify-content-center mt-3">
          {{ $students->withQueryString()->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
