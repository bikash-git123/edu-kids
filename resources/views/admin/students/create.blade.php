@extends('layouts.app')

@section('title', 'Add New Student')

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Add Student</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home">
      <a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a>
    </li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="{{ route('admin.students.index') }}">Students</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Add New</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-10 mx-auto">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0">Student Registration Form</h4>
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

        <form action="{{ route('admin.students.store') }}" method="POST">
          @csrf
          <div class="row g-3">
            <div class="col-md-4">
              <label for="student_code" class="form-label fw-bold">Student Code / ID <span class="text-danger">*</span></label>
              <input type="text" name="student_code" id="student_code" class="form-control" value="{{ old('student_code', 'STD-2024-' . rand(100, 999)) }}" required>
            </div>
            <div class="col-md-4">
              <label for="first_name" class="form-label fw-bold">First Name <span class="text-danger">*</span></label>
              <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}" required>
            </div>
            <div class="col-md-4">
              <label for="last_name" class="form-label fw-bold">Last Name <span class="text-danger">*</span></label>
              <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name') }}" required>
            </div>

            <div class="col-md-6">
              <label for="email" class="form-label fw-bold">Email Address <span class="text-danger">*</span></label>
              <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label fw-bold">Phone Number</label>
              <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
            </div>

            <div class="col-md-4">
              <label for="gender" class="form-label fw-bold">Gender <span class="text-danger">*</span></label>
              <select name="gender" id="gender" class="form-select" required>
                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="dob" class="form-label fw-bold">Date of Birth</label>
              <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob') }}">
            </div>
            <div class="col-md-4">
              <label for="status" class="form-label fw-bold">Enrollment Status <span class="text-danger">*</span></label>
              <select name="status" id="status" class="form-select" required>
                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="graduated" {{ old('status') == 'graduated' ? 'selected' : '' }}>Graduated</option>
                <option value="suspended" {{ old('status') == 'suspended' ? 'selected' : '' }}>Suspended</option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="department" class="form-label fw-bold">Department <span class="text-danger">*</span></label>
              <input type="text" name="department" id="department" class="form-control" placeholder="e.g. Computer Science" value="{{ old('department') }}" required>
            </div>
            <div class="col-md-6">
              <label for="grade_level" class="form-label fw-bold">Grade Level / Year <span class="text-danger">*</span></label>
              <input type="text" name="grade_level" id="grade_level" class="form-control" placeholder="e.g. Year 2 (Sophomore)" value="{{ old('grade_level') }}" required>
            </div>

            <div class="col-12">
              <label for="address" class="form-label fw-bold">Residential Address</label>
              <textarea name="address" id="address" class="form-control" rows="3">{{ old('address') }}</textarea>
            </div>
          </div>

          <div class="mt-4 text-end">
            <a href="{{ route('admin.students.index') }}" class="btn btn-label-secondary me-2">Cancel</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Save Student</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
