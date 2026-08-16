@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Edit Course</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="{{ route('admin.courses.index') }}">Courses</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Edit Course</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-9 mx-auto">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0">Update Course Details</h4>
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

        <form action="{{ route('admin.courses.update', $course) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="row g-3">
            <div class="col-md-4">
              <label for="code" class="form-label fw-bold">Course Code <span class="text-danger">*</span></label>
              <input type="text" name="code" id="code" class="form-control" value="{{ old('code', $course->code) }}" required>
            </div>
            <div class="col-md-8">
              <label for="name" class="form-label fw-bold">Course Title <span class="text-danger">*</span></label>
              <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $course->name) }}" required>
            </div>

            <div class="col-md-4">
              <label for="department" class="form-label fw-bold">Department <span class="text-danger">*</span></label>
              <input type="text" name="department" id="department" class="form-control" value="{{ old('department', $course->department) }}" required>
            </div>
            <div class="col-md-4">
              <label for="credits" class="form-label fw-bold">Credit Hours <span class="text-danger">*</span></label>
              <input type="number" name="credits" id="credits" class="form-control" min="1" max="10" value="{{ old('credits', $course->credits) }}" required>
            </div>
            <div class="col-md-4">
              <label for="status" class="form-label fw-bold">Status <span class="text-danger">*</span></label>
              <select name="status" id="status" class="form-select" required>
                <option value="active" {{ old('status', $course->status) == 'active' ? 'selected' : '' }}>Active</option>
                <option value="archived" {{ old('status', $course->status) == 'archived' ? 'selected' : '' }}>Archived</option>
              </select>
            </div>

            <div class="col-md-12">
              <label for="teacher_id" class="form-label fw-bold">Assigned Faculty / Teacher</label>
              <select name="teacher_id" id="teacher_id" class="form-select">
                <option value="">-- Assign Later --</option>
                @foreach($teachers as $t)
                  <option value="{{ $t->id }}" {{ old('teacher_id', $course->teacher_id) == $t->id ? 'selected' : '' }}>
                    {{ $t->name }} ({{ $t->department }} - {{ $t->designation }})
                  </option>
                @endforeach
              </select>
            </div>

            <div class="col-12">
              <label for="description" class="form-label fw-bold">Course Description</label>
              <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $course->description) }}</textarea>
            </div>
          </div>

          <div class="mt-4 text-end">
            <a href="{{ route('admin.courses.index') }}" class="btn btn-label-secondary me-2">Cancel</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Update Course</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
