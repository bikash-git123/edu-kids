@extends('layouts.app')

@section('title', 'Add Faculty Member')

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Add Faculty Member</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="{{ route('admin.teachers.index') }}">Faculty</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">Add New</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-10 mx-auto">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0">Faculty Details Form</h4>
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

        <form action="{{ route('admin.teachers.store') }}" method="POST">
          @csrf
          <div class="row g-3">
            <div class="col-md-4">
              <label for="employee_id" class="form-label fw-bold">Employee ID <span class="text-danger">*</span></label>
              <input type="text" name="employee_id" id="employee_id" class="form-control" value="{{ old('employee_id', 'EMP-' . rand(1000, 9999)) }}" required>
            </div>
            <div class="col-md-4">
              <label for="name" class="form-label fw-bold">Full Name (with Title) <span class="text-danger">*</span></label>
              <input type="text" name="name" id="name" class="form-control" placeholder="e.g. Dr. Robert Miller" value="{{ old('name') }}" required>
            </div>
            <div class="col-md-4">
              <label for="email" class="form-label fw-bold">Email Address <span class="text-danger">*</span></label>
              <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="col-md-4">
              <label for="phone" class="form-label fw-bold">Phone Number</label>
              <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
            </div>
            <div class="col-md-4">
              <label for="qualification" class="form-label fw-bold">Qualification <span class="text-danger">*</span></label>
              <input type="text" name="qualification" id="qualification" class="form-control" placeholder="e.g. Ph.D. in Computer Science" value="{{ old('qualification') }}" required>
            </div>
            <div class="col-md-4">
              <label for="designation" class="form-label fw-bold">Designation <span class="text-danger">*</span></label>
              <input type="text" name="designation" id="designation" class="form-control" placeholder="e.g. Professor, Lecturer" value="{{ old('designation', 'Lecturer') }}" required>
            </div>

            <div class="col-md-4">
              <label for="department" class="form-label fw-bold">Department <span class="text-danger">*</span></label>
              <input type="text" name="department" id="department" class="form-control" placeholder="e.g. Computer Science" value="{{ old('department') }}" required>
            </div>
            <div class="col-md-4">
              <label for="joining_date" class="form-label fw-bold">Joining Date</label>
              <input type="date" name="joining_date" id="joining_date" class="form-control" value="{{ old('joining_date', date('Y-m-d')) }}">
            </div>
            <div class="col-md-4">
              <label for="status" class="form-label fw-bold">Status <span class="text-danger">*</span></label>
              <select name="status" id="status" class="form-select" required>
                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="on_leave" {{ old('status') == 'on_leave' ? 'selected' : '' }}>On Leave</option>
                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
              </select>
            </div>
          </div>

          <div class="mt-4 text-end">
            <a href="{{ route('admin.teachers.index') }}" class="btn btn-label-secondary me-2">Cancel</a>
            <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Save Faculty Member</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
