@extends('layouts.app')

@section('title', 'Courses & Classes Catalog')

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Courses &amp; Classes</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Management</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Courses</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title mb-0">Academic Course Catalog</h4>
        <a href="{{ route('admin.courses.create') }}" class="btn btn-primary btn-round ms-auto">
          <i class="fa fa-plus me-1"></i> Add New Course
        </a>
      </div>

      <div class="card-body">
        <!-- Filter Form -->
        <form method="GET" action="{{ route('admin.courses.index') }}" class="row g-3 mb-4">
          <div class="col-md-5">
            <input type="text" name="search" class="form-control" placeholder="Search by Code, Course Name..." value="{{ request('search') }}">
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
            <a href="{{ route('admin.courses.index') }}" class="btn btn-light" title="Reset"><i class="fas fa-undo"></i></a>
          </div>
        </form>

        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead class="table-dark">
              <tr>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Department</th>
                <th>Credits</th>
                <th>Instructor / Teacher</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse($courses as $course)
                <tr>
                  <td><code>{{ $course->code }}</code></td>
                  <td class="fw-bold">{{ $course->name }}</td>
                  <td><span class="badge bg-info">{{ $course->department }}</span></td>
                  <td>{{ $course->credits }} Credit Hours</td>
                  <td>
                    @if($course->teacher)
                      <span class="fw-semibold"><i class="fas fa-user-tie text-muted me-1"></i>{{ $course->teacher->name }}</span>
                    @else
                      <span class="text-muted italic">Unassigned</span>
                    @endif
                  </td>
                  <td>
                    @if($course->status == 'active')
                      <span class="badge bg-success">Active</span>
                    @else
                      <span class="badge bg-secondary">Archived</span>
                    @endif
                  </td>
                  <td class="text-center">
                    <div class="btn-group">
                      <a href="{{ route('admin.courses.edit', $course) }}" class="btn btn-link btn-primary p-1" title="Edit Course">
                        <i class="fa fa-edit"></i>
                      </a>
                      <form action="{{ route('admin.courses.destroy', $course) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this course from catalog?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link btn-danger p-1" title="Delete Course">
                          <i class="fa fa-times"></i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="7" class="text-center py-4 text-muted">
                    No courses found in catalog.
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <div class="d-flex justify-content-center mt-3">
          {{ $courses->withQueryString()->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
