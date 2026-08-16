@extends('layouts.app')

@section('title', 'Gallery - ' . $gallery->title)

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Event Photo Album</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="{{ route('admin.galleries.index') }}">Event Gallery</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">{{ $gallery->title }}</a></li>
  </ul>
</div>

<!-- Main Event Title Banner -->
<div class="card card-round bg-primary text-white mb-4">
  <div class="card-body p-4">
    <div class="d-flex justify-content-between align-items-start">
      <div>
        <span class="badge bg-white text-primary mb-2 fw-bold">EVENT ALBUM</span>
        <h1 class="fw-bold text-white mb-2">{{ $gallery->title }}</h1>
        @if($gallery->event_date)
          <p class="text-white-50 mb-2">
            <i class="far fa-calendar-alt me-2"></i> {{ \Carbon\Carbon::parse($gallery->event_date)->format('F d, Y') }}
          </p>
        @endif
        @if($gallery->description)
          <p class="lead text-white-75 mb-0 fs-6" style="max-width: 800px;">
            {{ $gallery->description }}
          </p>
        @endif
      </div>
      <div>
        <a href="{{ route('admin.galleries.edit', $gallery) }}" class="btn btn-light btn-round">
          <i class="fas fa-edit me-1"></i> Edit Gallery
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Image Gallery Grid -->
<div class="row">
  <div class="col-12 mb-3 d-flex justify-content-between align-items-center">
    <h4 class="fw-bold text-dark mb-0">Album Photos ({{ $gallery->images->count() }})</h4>
    <a href="{{ route('admin.galleries.index') }}" class="btn btn-outline-secondary btn-sm">
      <i class="fas fa-arrow-left me-1"></i> Back to All Galleries
    </a>
  </div>

  @forelse($gallery->images as $index => $img)
    <div class="col-md-4 col-sm-6 mb-4">
      <div class="card h-100 shadow-sm border rounded overflow-hidden">
        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal{{ $img->id }}" class="d-block text-decoration-none">
          <div class="position-relative overflow-hidden" style="height: 240px;">
            <img src="{{ asset($img->image_path) }}" class="w-100 h-100" style="object-fit: cover; transition: transform 0.3s ease;" alt="{{ $img->title ?? $gallery->title }}">
            <div class="position-absolute bottom-0 start-0 end-0 p-2 text-white bg-dark bg-opacity-50">
              <i class="fas fa-search-plus me-1"></i> Click to Enlarge
            </div>
          </div>
        </a>
        <div class="card-body">
          @if($img->title)
            <h6 class="fw-bold text-dark mb-1"><i class="fas fa-tag text-primary me-1"></i> {{ $img->title }}</h6>
          @else
            <h6 class="fw-bold text-muted italic mb-1 fs-7">Untitled Photo</h6>
          @endif

          @if($img->description)
            <p class="card-text text-secondary fs-7 mb-0">
              {{ $img->description }}
            </p>
          @endif
        </div>
      </div>
    </div>

    <!-- Modal Lightbox for Image Preview -->
    <div class="modal fade" id="imageModal{{ $img->id }}" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title fw-bold">
              {{ $img->title ?? $gallery->title }}
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center p-0 bg-dark">
            <img src="{{ asset($img->image_path) }}" class="img-fluid" style="max-height: 70vh; object-fit: contain;" alt="{{ $img->title }}">
          </div>
          @if($img->description)
            <div class="modal-footer justify-content-start bg-light">
              <div class="w-100">
                <strong class="text-dark">Description:</strong>
                <p class="mb-0 text-secondary fs-7">{{ $img->description }}</p>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  @empty
    <div class="col-12 text-center py-5 text-muted">
      <i class="fas fa-camera-retro fa-3x mb-3 text-secondary"></i>
      <p>No photos added to this event gallery yet.</p>
      <a href="{{ route('admin.galleries.edit', $gallery) }}" class="btn btn-primary btn-sm">
        <i class="fas fa-plus me-1"></i> Add Photos
      </a>
    </div>
  @endforelse
</div>
@endsection
