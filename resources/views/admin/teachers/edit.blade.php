@extends('layouts.app')

@section('title', 'Edit Faculty Member')

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Edit Faculty Member</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="{{ route('admin.teachers.index') }}">Faculty</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Edit Member</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-10 mx-auto">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0">Update Faculty Details</h4>
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

        <form action="{{ route('admin.teachers.update', $teacher) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="row g-3">
            <div class="col-md-4">
              <label for="employee_id" class="form-label fw-bold">Employee ID <span class="text-danger">*</span></label>
              <input type="text" name="employee_id" id="employee_id" class="form-control" value="{{ old('employee_id', $teacher->employee_id) }}" required>
            </div>
            <div class="col-md-4">
              <label for="name" class="form-label fw-bold">Full Name (with Title) <span class="text-danger">*</span></label>
              <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $teacher->name) }}" required>
            </div>
            <div class="col-md-4">
              <label for="email" class="form-label fw-bold">Email Address <span class="text-danger">*</span></label>
              <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $teacher->email) }}" required>
            </div>

            <div class="col-md-4">
              <label for="phone" class="form-label fw-bold">Phone Number</label>
              <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $teacher->phone) }}">
            </div>
            <div class="col-md-4">
              <label for="qualification" class="form-label fw-bold">Qualification <span class="text-danger">*</span></label>
              <input type="text" name="qualification" id="qualification" class="form-control" value="{{ old('qualification', $teacher->qualification) }}" required>
            </div>
            <div class="col-md-4">
              <label for="designation" class="form-label fw-bold">Designation <span class="text-danger">*</span></label>
              <input type="text" name="designation" id="designation" class="form-control" value="{{ old('designation', $teacher->designation) }}" required>
            </div>

            <div class="col-md-4">
              <label for="department" class="form-label fw-bold">Department <span class="text-danger">*</span></label>
              <input type="text" name="department" id="department" class="form-control" value="{{ old('department', $teacher->department) }}" required>
            </div>
            <div class="col-md-4">
              <label for="joining_date" class="form-label fw-bold">Joining Date</label>
              <input type="date" name="joining_date" id="joining_date" class="form-control" value="{{ old('joining_date', $teacher->joining_date) }}">
            </div>
            <div class="col-md-4">
              <label for="status" class="form-label fw-bold">Status <span class="text-danger">*</span></label>
              <select name="status" id="status" class="form-select" required>
                <option value="active" {{ old('status', $teacher->status) == 'active' ? 'selected' : '' }}>Active</option>
                <option value="on_leave" {{ old('status', $teacher->status) == 'on_leave' ? 'selected' : '' }}>On Leave</option>
                <option value="inactive" {{ old('status', $teacher->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
              </select>
            </div>
          </div>

          <div class="mt-4 text-end">
            <a href="{{ route('admin.teachers.index') }}" class="btn btn-label-secondary me-2">Cancel</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Update Faculty Member</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
