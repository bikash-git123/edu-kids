@extends('layouts.app')

@section('title', 'Edit Event Gallery - ' . $gallery->title)

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Edit Event Gallery</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="{{ route('admin.galleries.index') }}">Event Gallery</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Edit Gallery</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-10 mx-auto">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0">Update Album &amp; Photos</h4>
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

        <form action="{{ route('admin.galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <!-- Section 1: Main Event Title & Details -->
          <div class="border rounded p-3 mb-4 bg-light">
            <h5 class="fw-bold text-primary mb-3"><i class="fas fa-heading me-2"></i>Main Event Details</h5>
            <div class="row g-3">
              <div class="col-md-8">
                <label for="title" class="form-label fw-bold">Main Gallery Title <span class="text-danger">*</span></label>
                <input type="text" name="title" id="title" class="form-control form-control-lg" value="{{ old('title', $gallery->title) }}" required>
              </div>

              <div class="col-md-4">
                <label for="event_date" class="form-label fw-bold">Event Date</label>
                <input type="date" name="event_date" id="event_date" class="form-control" value="{{ old('event_date', $gallery->event_date) }}">
              </div>

              <div class="col-12">
                <label for="description" class="form-label fw-bold">Event Description / Summary</label>
                <textarea name="description" id="description" class="form-control" rows="2">{{ old('description', $gallery->description) }}</textarea>
              </div>

              <div class="col-md-4">
                <label for="status" class="form-label fw-bold">Album Status</label>
                <select name="status" id="status" class="form-select">
                  <option value="active" {{ old('status', $gallery->status) == 'active' ? 'selected' : '' }}>Active</option>
                  <option value="archived" {{ old('status', $gallery->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Section 2: Existing Photos -->
          <div class="border rounded p-3 mb-4">
            <h5 class="fw-bold text-primary mb-3"><i class="fas fa-images me-2"></i>Existing Photos in Album ({{ $gallery->images->count() }})</h5>

            <div class="row g-3">
              @forelse($gallery->images as $img)
                <div class="col-md-6 mb-3">
                  <div class="card border h-100">
                    <div class="row g-0">
                      <div class="col-4">
                        <img src="{{ asset($img->image_path) }}" class="img-fluid rounded-start h-100" style="object-fit: cover; min-height: 120px;" alt="{{ $img->title }}">
                      </div>
                      <div class="col-8">
                        <div class="card-body py-2 px-3">
                          <div class="mb-2">
                            <label class="form-label fs-7 fw-bold mb-1">Optional Photo Title</label>
                            <input type="text" name="existing_images[{{ $img->id }}][title]" class="form-control form-control-sm" value="{{ old('existing_images.'.$img->id.'.title', $img->title) }}" placeholder="Photo Title">
                          </div>
                          <div class="mb-2">
                            <label class="form-label fs-7 fw-bold mb-1">Optional Photo Description</label>
                            <input type="text" name="existing_images[{{ $img->id }}][description]" class="form-control form-control-sm" value="{{ old('existing_images.'.$img->id.'.description', $img->description) }}" placeholder="Photo Description">
                          </div>
                          <div class="text-end">
                            <button type="button" class="btn btn-sm btn-outline-danger py-0 px-2 fs-7" onclick="if(confirm('Remove this photo from gallery?')) document.getElementById('delete-img-form-{{ $img->id }}').submit();">
                              <i class="fas fa-trash me-1"></i> Delete Photo
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @empty
                <div class="col-12 text-muted fs-7">No photos in this album yet.</div>
              @endforelse
            </div>
          </div>

          <!-- Section 3: Add New Photos -->
          <div class="border rounded p-3 mb-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="fw-bold text-success mb-0"><i class="fas fa-plus-circle me-2"></i>Add Additional Photos</h5>
              <button type="button" class="btn btn-sm btn-outline-success" id="addNewImageBtn">
                <i class="fas fa-plus me-1"></i> Add Another Photo Field
              </button>
            </div>

            <div id="newImageFieldsContainer">
              <div class="card border mb-3 new-image-item">
                <div class="card-body py-2">
                  <div class="row g-3">
                    <div class="col-md-4">
                      <label class="form-label fw-bold fs-7">Select Image File</label>
                      <input type="file" name="new_images[0][file]" class="form-control form-control-sm" accept="image/*">
                    </div>
                    <div class="col-md-4">
                      <label class="form-label fw-bold fs-7">Optional Title</label>
                      <input type="text" name="new_images[0][title]" class="form-control form-control-sm" placeholder="Photo Title">
                    </div>
                    <div class="col-md-4">
                      <label class="form-label fw-bold fs-7">Optional Description</label>
                      <input type="text" name="new_images[0][description]" class="form-control form-control-sm" placeholder="Photo Description">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="text-end">
            <a href="{{ route('admin.galleries.show', $gallery) }}" class="btn btn-label-secondary me-2">Cancel</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Update Event Gallery</button>
          </div>
        </form>

        <!-- Hidden Forms for Delete Photo -->
        @foreach($gallery->images as $img)
          <form id="delete-img-form-{{ $img->id }}" action="{{ route('admin.galleries.images.destroy', $img) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
          </form>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    let newImgIndex = 1;
    const container = document.getElementById('newImageFieldsContainer');
    const addBtn = document.getElementById('addNewImageBtn');

    addBtn.addEventListener('click', function() {
        const itemHtml = `
            <div class="card border mb-3 new-image-item">
              <div class="card-body py-2">
                <div class="row g-3">
                  <div class="col-md-4">
                    <label class="form-label fw-bold fs-7">Select Image File</label>
                    <input type="file" name="new_images[${newImgIndex}][file]" class="form-control form-control-sm" accept="image/*">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label fw-bold fs-7">Optional Title</label>
                    <input type="text" name="new_images[${newImgIndex}][title]" class="form-control form-control-sm" placeholder="Photo Title">
                  </div>
                  <div class="col-md-4">
                    <label class="form-label fw-bold fs-7">Optional Description</label>
                    <input type="text" name="new_images[${newImgIndex}][description]" class="form-control form-control-sm" placeholder="Photo Description">
                  </div>
                </div>
              </div>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', itemHtml);
        newImgIndex++;
    });
});
</script>
@endpush
