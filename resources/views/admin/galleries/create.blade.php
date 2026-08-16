@extends('layouts.app')

@section('title', 'Create Event Gallery')

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Create Event Gallery</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="{{ route('admin.galleries.index') }}">Event Gallery</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Create New</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-10 mx-auto">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0">Event Album &amp; Image Uploads</h4>
      </div>
      <div class="card-body">
        @if($errors->any())
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <!-- Section 1: Main Event Title & Details -->
          <div class="border rounded p-3 mb-4 bg-light">
            <h5 class="fw-bold text-primary mb-3"><i class="fas fa-heading me-2"></i>Main Event Details</h5>
            <div class="row g-3">
              <div class="col-md-8">
                <label for="title" class="form-label fw-bold">Main Gallery Title <span class="text-danger">*</span></label>
                <input type="text" name="title" id="title" class="form-control form-control-lg" placeholder="e.g. Independence Day Celebration" value="{{ old('title') }}" required>
                <small class="text-muted">This main title applies to the entire photo collection.</small>
              </div>

              <div class="col-md-4">
                <label for="event_date" class="form-label fw-bold">Event Date</label>
                <input type="date" name="event_date" id="event_date" class="form-control" value="{{ old('event_date', date('Y-m-d')) }}">
              </div>

              <div class="col-12">
                <label for="description" class="form-label fw-bold">Event Description / Summary</label>
                <textarea name="description" id="description" class="form-control" rows="2" placeholder="Brief summary of the event...">{{ old('description') }}</textarea>
              </div>

              <div class="col-md-4">
                <label for="status" class="form-label fw-bold">Album Status</label>
                <select name="status" id="status" class="form-select">
                  <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                  <option value="archived" {{ old('status') == 'archived' ? 'selected' : '' }}>Archived</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Section 2: Upload Images with Optional Title & Description -->
          <div class="border rounded p-3 mb-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fw-bold text-primary mb-0"><i class="fas fa-camera me-2"></i>Event Photos</h5>
              <button type="button" class="btn btn-sm btn-outline-success" id="addImageBtn">
                <i class="fas fa-plus me-1"></i> Add Another Photo Field
              </button>
            </div>
            <p class="text-muted fs-7">You can upload multiple photos. Each photo can have an <strong>optional title</strong> and <strong>optional description</strong>.</p>

            <div id="imageFieldsContainer">
              <!-- Default 2 Image Upload Cards -->
              @for($i = 0; $i < 2; $i++)
                <div class="card border mb-3 image-upload-item">
                  <div class="card-header bg-light d-flex justify-content-between align-items-center py-2">
                    <span class="fw-bold text-secondary">Photo #{{ $i + 1 }}</span>
                    @if($i > 0)
                      <button type="button" class="btn btn-link btn-danger btn-sm p-0 remove-image-btn"><i class="fas fa-times"></i> Remove</button>
                    @endif
                  </div>
                  <div class="card-body">
                    <div class="row g-3">
                      <div class="col-md-4">
                        <label class="form-label fw-bold">Select Image File <span class="text-danger">*</span></label>
                        <input type="file" name="images[{{ $i }}][file]" class="form-control" accept="image/*">
                      </div>
                      <div class="col-md-4">
                        <label class="form-label fw-bold">Optional Photo Title</label>
                        <input type="text" name="images[{{ $i }}][title]" class="form-control" placeholder="e.g. Flag Hoisting Ceremony">
                      </div>
                      <div class="col-md-4">
                        <label class="form-label fw-bold">Optional Photo Description</label>
                        <input type="text" name="images[{{ $i }}][description]" class="form-control" placeholder="e.g. Chief guest hoisting flag at morning parade">
                      </div>
                    </div>
                  </div>
                </div>
              @endfor
            </div>
          </div>

          <div class="text-end">
            <a href="{{ route('admin.galleries.index') }}" class="btn btn-label-secondary me-2">Cancel</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-upload me-1"></i> Save Event Gallery</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    let imageIndex = 2;
    const container = document.getElementById('imageFieldsContainer');
    const addBtn = document.getElementById('addImageBtn');

    addBtn.addEventListener('click', function() {
        const itemHtml = `
            <div class="card border mb-3 image-upload-item">
              <div class="card-header bg-light d-flex justify-content-between align-items-center py-2">
                <span class="fw-bold text-secondary">Photo #${imageIndex + 1}</span>
                <button type="button" class="btn btn-link btn-danger btn-sm p-0 remove-image-btn"><i class="fas fa-times"></i> Remove</button>
              </div>
              <div class="card-body">
                <div class="row g-3">
                  <div class="col-md-4">
                    <label class="form-label fw-bold">Select Image File <span class="text-danger">*</span></label>
                    <input type="file" name="images[${imageIndex}][file]" class="form-control" accept="image/*">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label fw-bold">Optional Photo Title</label>
                    <input type="text" name="images[${imageIndex}][title]" class="form-control" placeholder="e.g. Cultural Performance">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label fw-bold">Optional Photo Description</label>
                    <input type="text" name="images[${imageIndex}][description]" class="form-control" placeholder="e.g. Patriotic song group dance">
                  </div>
                </div>
              </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', itemHtml);
        imageIndex++;
    });

    container.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-image-btn') || e.target.parentElement.classList.contains('remove-image-btn')) {
            const card = e.target.closest('.image-upload-item');
            if (card) {
                card.remove();
            }
        }
    });
});
</script>
@endpush
