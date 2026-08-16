@extends('layouts.app')

@section('title', 'Event Image Gallery')

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Event Photo Gallery</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Management</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Galleries</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <div>
          <h4 class="card-title mb-0">Event Albums &amp; Photo Collections</h4>
          <small class="text-muted">Manage campus events like Independence Day Celebration, Sports Day, and Exhibitions</small>
        </div>
        <a href="{{ route('admin.galleries.create') }}" class="btn btn-primary btn-round ms-auto">
          <i class="fa fa-plus me-1"></i> Create New Event Gallery
        </a>
      </div>

      <div class="card-body">
        <!-- Search & Filter Form -->
        <form method="GET" action="{{ route('admin.galleries.index') }}" class="row g-3 mb-4">
          <div class="col-md-6">
            <input type="text" name="search" class="form-control" placeholder="Search event title (e.g. Independence Day)..." value="{{ request('search') }}">
          </div>
          <div class="col-md-3 d-flex gap-2">
            <button type="submit" class="btn btn-secondary w-100"><i class="fas fa-search me-1"></i> Search</button>
            <a href="{{ route('admin.galleries.index') }}" class="btn btn-light" title="Reset"><i class="fas fa-undo"></i></a>
          </div>
        </form>

        <div class="row">
          @forelse($galleries as $gallery)
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card h-100 shadow-sm border rounded">
                <div class="position-relative">
                  @if($gallery->images->count() > 0)
                    <img src="{{ asset($gallery->images->first()->image_path) }}" class="card-img-top" alt="{{ $gallery->title }}" style="height: 200px; object-fit: cover;">
                  @else
                    <div class="bg-dark text-white d-flex align-items-center justify-content-center" style="height: 200px;">
                      <i class="fas fa-images fa-3x text-white-50"></i>
                    </div>
                  @endif
                  <span class="badge bg-primary position-absolute top-0 end-0 m-2 px-2 py-1 fs-7">
                    <i class="fas fa-camera me-1"></i> {{ $gallery->images_count }} Photos
                  </span>
                </div>
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title fw-bold text-dark mb-1">{{ $gallery->title }}</h5>
                  @if($gallery->event_date)
                    <p class="text-muted fs-7 mb-2">
                      <i class="far fa-calendar-alt me-1"></i> {{ \Carbon\Carbon::parse($gallery->event_date)->format('F d, Y') }}
                    </p>
                  @endif
                  <p class="card-text text-secondary fs-7 flex-grow-1">
                    {{ Str::limit($gallery->description, 90, '...') }}
                  </p>
                  <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                    <a href="{{ route('admin.galleries.show', $gallery) }}" class="btn btn-sm btn-outline-primary">
                      <i class="fas fa-eye me-1"></i> View Album
                    </a>
                    <div class="btn-group">
                      <a href="{{ route('admin.galleries.edit', $gallery) }}" class="btn btn-sm btn-label-info" title="Edit Album">
                        <i class="fas fa-edit"></i>
                      </a>
                      <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this entire gallery album and all photos inside it?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-label-danger" title="Delete Album">
                          <i class="fas fa-trash"></i>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @empty
            <div class="col-12 text-center py-5 text-muted">
              <i class="fas fa-images fa-4x mb-3 text-secondary"></i>
              <h4>No Gallery Albums Found</h4>
              <p>Click the "Create New Event Gallery" button above to upload photos for an event like Independence Day Celebration.</p>
            </div>
          @endforelse
        </div>

        <div class="d-flex justify-content-center mt-4">
          {{ $galleries->withQueryString()->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
