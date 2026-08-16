@extends('layouts.app')

@section('title', 'Notice Board & Announcements')

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Notice Board</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Management</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Notice Board</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="card-title mb-0">Announcements &amp; Circulars</h4>
        <a href="{{ route('admin.notices.create') }}" class="btn btn-primary btn-round ms-auto">
          <i class="fa fa-plus me-1"></i> Post Announcement
        </a>
      </div>

      <div class="card-body">
        <!-- Filter Form -->
        <form method="GET" action="{{ route('admin.notices.index') }}" class="row g-3 mb-4">
          <div class="col-md-4">
            <input type="text" name="search" class="form-control" placeholder="Search Title or Content..." value="{{ request('search') }}">
          </div>
          <div class="col-md-3">
            <select name="target_audience" class="form-select">
              <option value="">-- All Target Audiences --</option>
              <option value="All" {{ request('target_audience') == 'All' ? 'selected' : '' }}>All</option>
              <option value="Students" {{ request('target_audience') == 'Students' ? 'selected' : '' }}>Students</option>
              <option value="Teachers" {{ request('target_audience') == 'Teachers' ? 'selected' : '' }}>Teachers</option>
              <option value="Staff" {{ request('target_audience') == 'Staff' ? 'selected' : '' }}>Staff</option>
            </select>
          </div>
          <div class="col-md-3">
            <select name="priority" class="form-select">
              <option value="">-- All Priorities --</option>
              <option value="Normal" {{ request('priority') == 'Normal' ? 'selected' : '' }}>Normal</option>
              <option value="High" {{ request('priority') == 'High' ? 'selected' : '' }}>High</option>
              <option value="Urgent" {{ request('priority') == 'Urgent' ? 'selected' : '' }}>Urgent</option>
            </select>
          </div>
          <div class="col-md-2 d-flex gap-2">
            <button type="submit" class="btn btn-secondary w-100"><i class="fas fa-filter me-1"></i> Filter</button>
            <a href="{{ route('admin.notices.index') }}" class="btn btn-light" title="Reset"><i class="fas fa-undo"></i></a>
          </div>
        </form>

        <div class="table-responsive">
          <table class="table table-hover table-striped">
            <thead class="table-dark">
              <tr>
                <th>Title</th>
                <th>Target Audience</th>
                <th>Priority</th>
                <th>Posted Date</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse($notices as $notice)
                <tr>
                  <td class="fw-bold">
                    <a href="{{ route('admin.notices.show', $notice) }}" class="text-dark">{{ $notice->title }}</a>
                  </td>
                  <td><span class="badge bg-secondary">{{ $notice->target_audience }}</span></td>
                  <td>
                    @if($notice->priority == 'Urgent')
                      <span class="badge bg-danger">Urgent</span>
                    @elseif($notice->priority == 'High')
                      <span class="badge bg-warning text-dark">High</span>
                    @else
                      <span class="badge bg-info">Normal</span>
                    @endif
                  </td>
                  <td class="text-muted fs-7">{{ \Carbon\Carbon::parse($notice->posted_at)->format('M d, Y') }}</td>
                  <td>
                    @if($notice->status == 'published')
                      <span class="badge bg-success">Published</span>
                    @elseif($notice->status == 'draft')
                      <span class="badge bg-warning text-dark">Draft</span>
                    @else
                      <span class="badge bg-secondary">Archived</span>
                    @endif
                  </td>
                  <td class="text-center">
                    <div class="btn-group">
                      <a href="{{ route('admin.notices.show', $notice) }}" class="btn btn-link btn-info p-1" title="Read Notice">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="{{ route('admin.notices.edit', $notice) }}" class="btn btn-link btn-primary p-1" title="Edit Notice">
                        <i class="fa fa-edit"></i>
                      </a>
                      <form action="{{ route('admin.notices.destroy', $notice) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this announcement?');">
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
                  <td colspan="6" class="text-center py-4 text-muted">
                    No announcements published.
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <div class="d-flex justify-content-center mt-3">
          {{ $notices->withQueryString()->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
