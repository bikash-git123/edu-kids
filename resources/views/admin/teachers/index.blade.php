@extends('layouts.app')

@section('title', 'Faculty & Teachers')

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Faculty &amp; Teachers Directory</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Management</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Faculty</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title mb-0">Faculty Members</h4>
        <a href="{{ route('admin.teachers.create') }}" class="btn btn-primary btn-round ms-auto">
          <i class="fa fa-plus me-1"></i> Add Faculty Member
        </a>
      </div>

      <div class="card-body">
        <!-- Filter Form -->
        <form method="GET" action="{{ route('admin.teachers.index') }}" class="row g-3 mb-4">
          <div class="col-md-5">
            <input type="text" name="search" class="form-control" placeholder="Search by Employee ID, Name, Qualification..." value="{{ request('search') }}">
          </div>
          <div class="col-md-4">
            <select name="department" class="form-select">
              <option value="">-- All Departments --</option>
              @foreach($departments as $dept)
                <option value="{{ $dept }}" {{ request('department') == $dept ? 'selected' : '' }}>{{ $dept }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-3 d-flex gap-2">
            <button type="submit" class="btn btn-secondary w-100"><i class="fas fa-filter me-1"></i> Filter</button>
            <a href="{{ route('admin.teachers.index') }}" class="btn btn-light" title="Reset"><i class="fas fa-undo"></i></a>
          </div>
        </form>

        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead class="table-dark">
              <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Department</th>
                <th>Qualification</th>
                <th>Courses Assigned</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse($teachers as $teacher)
                <tr>
                  <td><code>{{ $teacher->employee_id }}</code></td>
                  <td class="fw-bold">{{ $teacher->name }}</td>
                  <td>{{ $teacher->designation }}</td>
                  <td><span class="badge bg-info">{{ $teacher->department }}</span></td>
                  <td>{{ $teacher->qualification }}</td>
                  <td><span class="badge bg-secondary">{{ $teacher->courses_count }} Courses</span></td>
                  <td>
                    @if($teacher->status == 'active')
                      <span class="badge bg-success">Active</span>
                    @elseif($teacher->status == 'on_leave')
                      <span class="badge bg-warning text-dark">On Leave</span>
                    @else
                      <span class="badge bg-danger">Inactive</span>
                    @endif
                  </td>
                  <td class="text-center">
                    <div class="btn-group">
                      <a href="{{ route('admin.teachers.show', $teacher) }}" class="btn btn-link btn-info p-1" title="View Profile">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.teachers.edit', $teacher) }}" class="btn btn-link btn-primary p-1" title="Edit Profile">
                        <i class="fa fa-edit"></i>
                      </a>
                      <form action="{{ route('admin.teachers.destroy', $teacher) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this faculty record?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link btn-danger p-1" title="Delete">
                          <i class="fa fa-times"></i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="8" class="text-center py-4 text-muted">
                    No faculty members found.
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <div class="d-flex justify-content-center mt-3">
          {{ $teachers->withQueryString()->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
