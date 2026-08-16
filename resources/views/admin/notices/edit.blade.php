@extends('layouts.app')

@section('title', 'Edit Announcement')

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Edit Announcement</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="{{ route('admin.notices.index') }}">Notice Board</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Edit Notice</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-9 mx-auto">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0">Update Announcement</h4>
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

        <form action="{{ route('admin.notices.update', $notice) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="row g-3">
            <div class="col-12">
              <label for="title" class="form-label fw-bold">Notice Title <span class="text-danger">*</span></label>
              <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $notice->title) }}" required>
            </div>

            <div class="col-md-4">
              <label for="target_audience" class="form-label fw-bold">Target Audience <span class="text-danger">*</span></label>
              <select name="target_audience" id="target_audience" class="form-select" required>
                <option value="All" {{ old('target_audience', $notice->target_audience) == 'All' ? 'selected' : '' }}>All (Entire Campus)</option>
                <option value="Students" {{ old('target_audience', $notice->target_audience) == 'Students' ? 'selected' : '' }}>Students</option>
                <option value="Teachers" {{ old('target_audience', $notice->target_audience) == 'Teachers' ? 'selected' : '' }}>Teachers / Faculty</option>
                <option value="Staff" {{ old('target_audience', $notice->target_audience) == 'Staff' ? 'selected' : '' }}>Administrative Staff</option>
              </select>
            </div>

            <div class="col-md-4">
              <label for="priority" class="form-label fw-bold">Priority Level <span class="text-danger">*</span></label>
              <select name="priority" id="priority" class="form-select" required>
                <option value="Normal" {{ old('priority', $notice->priority) == 'Normal' ? 'selected' : '' }}>Normal</option>
                <option value="High" {{ old('priority', $notice->priority) == 'High' ? 'selected' : '' }}>High</option>
                <option value="Urgent" {{ old('priority', $notice->priority) == 'Urgent' ? 'selected' : '' }}>Urgent</option>
              </select>
            </div>

            <div class="col-md-4">
              <label for="posted_at" class="form-label fw-bold">Posting Date <span class="text-danger">*</span></label>
              <input type="date" name="posted_at" id="posted_at" class="form-control" value="{{ old('posted_at', $notice->posted_at) }}" required>
            </div>

            <div class="col-md-12">
              <label for="status" class="form-label fw-bold">Publication Status <span class="text-danger">*</span></label>
              <select name="status" id="status" class="form-select" required>
                <option value="published" {{ old('status', $notice->status) == 'published' ? 'selected' : '' }}>Published</option>
                <option value="draft" {{ old('status', $notice->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="archived" {{ old('status', $notice->status) == 'archived' ? 'selected' : '' }}>Archived</option>
              </select>
            </div>

            <div class="col-12">
              <label for="content" class="form-label fw-bold">Notice Details / Body <span class="text-danger">*</span></label>
              <textarea name="content" id="content" class="form-control" rows="6" required>{{ old('content', $notice->content) }}</textarea>
            </div>
          </div>

          <div class="mt-4 text-end">
            <a href="{{ route('admin.notices.index') }}" class="btn btn-label-secondary me-2">Cancel</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Update Announcement</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
