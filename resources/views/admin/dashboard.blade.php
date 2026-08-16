@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
  <div>
    <h3 class="fw-bold mb-1">School & College Admin Dashboard</h3>
    <h6 class="op-7 mb-0">Overview of academic statistics, faculty, students, and notices</h6>
  </div>
  <div class="ms-md-auto py-2 py-md-0">
    <a href="{{ route('admin.students.create') }}" class="btn btn-primary btn-round me-2">
        <i class="fas fa-plus me-1"></i> Add Student
    </a>
    <a href="{{ route('admin.notices.create') }}" class="btn btn-label-info btn-round">
        <i class="fas fa-bullhorn me-1"></i> Post Notice
    </a>
  </div>
</div>

<!-- Stat Cards Row -->
<div class="row">
  <!-- Total Students -->
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-primary bubble-shadow-small">
              <i class="fas fa-user-graduate"></i>
            </div>
          </div>
          <div class="col col-stats ms-3 ms-sm-0">
            <div class="numbers">
              <p class="card-category">Total Students</p>
              <h4 class="card-title">{{ $totalStudents }}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Total Faculty / Teachers -->
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-info bubble-shadow-small">
              <i class="fas fa-chalkboard-teacher"></i>
            </div>
          </div>
          <div class="col col-stats ms-3 ms-sm-0">
            <div class="numbers">
              <p class="card-category">Faculty Members</p>
              <h4 class="card-title">{{ $totalTeachers }}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Active Courses -->
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-warning bubble-shadow-small">
              <i class="fas fa-book-open"></i>
            </div>
          </div>
          <div class="col col-stats ms-3 ms-sm-0">
            <div class="numbers">
              <p class="card-category">Active Courses</p>
              <h4 class="card-title">{{ $totalCourses }}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Active Notices -->
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-success bubble-shadow-small">
              <i class="fas fa-bullhorn"></i>
            </div>
          </div>
          <div class="col col-stats ms-3 ms-sm-0">
            <div class="numbers">
              <p class="card-category">Notices Published</p>
              <h4 class="card-title">{{ $totalNotices }}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Main Content Row -->
<div class="row">
  <!-- Chart: Department Distribution -->
  <div class="col-md-5">
    <div class="card card-round">
      <div class="card-header">
        <div class="card-head-row">
          <div class="card-title">Students by Department</div>
        </div>
      </div>
      <div class="card-body p-4 text-center">
        <canvas id="departmentChart" style="min-height: 250px;"></canvas>
      </div>
    </div>
  </div>

  <!-- Recent Announcements -->
  <div class="col-md-7">
    <div class="card card-round">
      <div class="card-header">
        <div class="card-head-row">
          <div class="card-title">Campus Announcements &amp; Notices</div>
          <div class="card-tools">
            <a href="{{ route('admin.notices.index') }}" class="btn btn-label-primary btn-round btn-sm">
                View All
            </a>
          </div>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead class="thead-light">
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Audience</th>
                <th scope="col">Priority</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
              @forelse($recentNotices as $notice)
                <tr>
                  <td>
                    <span class="fw-bold text-dark">{{ $notice->title }}</span>
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
                </tr>
              @empty
                <tr>
                  <td colspan="4" class="text-center text-muted">No notices found.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bottom Row: Recent Students & Recent Faculty -->
<div class="row">
  <!-- Recent Students -->
  <div class="col-md-7">
    <div class="card card-round">
      <div class="card-header">
        <div class="card-head-row">
          <div class="card-title">Recently Enrolled Students</div>
          <div class="card-tools">
            <a href="{{ route('admin.students.index') }}" class="btn btn-label-primary btn-round btn-sm">
                View All Students
            </a>
          </div>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead class="thead-light">
              <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Department</th>
                <th>Grade / Year</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($recentStudents as $student)
                <tr>
                  <td><code>{{ $student->student_code }}</code></td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar-sm me-2">
                        <span class="avatar-title rounded-circle bg-primary text-white fw-bold">
                            {{ substr($student->first_name, 0, 1) }}
                        </span>
                      </div>
                      <span class="fw-bold">{{ $student->full_name }}</span>
                    </div>
                  </td>
                  <td>{{ $student->department }}</td>
                  <td>{{ $student->grade_level }}</td>
                  <td>
                    <span class="badge bg-success">Active</span>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Faculty Members List -->
  <div class="col-md-5">
    <div class="card card-round">
      <div class="card-header">
        <div class="card-head-row">
          <div class="card-title">Faculty Directory</div>
          <div class="card-tools">
            <a href="{{ route('admin.teachers.index') }}" class="btn btn-label-info btn-round btn-sm">
                Manage Faculty
            </a>
          </div>
        </div>
      </div>
      <div class="card-body">
        @foreach($recentTeachers as $teacher)
          <div class="d-flex align-items-center mb-3 pb-2 border-bottom">
            <div class="avatar avatar-online me-3">
              <span class="avatar-title rounded-circle bg-info text-white fw-bold">
                {{ substr($teacher->name, 0, 1) }}
              </span>
            </div>
            <div class="flex-grow-1">
              <h6 class="mb-0 fw-bold">{{ $teacher->name }}</h6>
              <small class="text-muted">{{ $teacher->designation }} - {{ $teacher->department }}</small>
            </div>
            <span class="badge bg-light text-dark fs-8">{{ $teacher->qualification }}</span>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var deptCanvas = document.getElementById('departmentChart').getContext('2d');
    var deptLabels = {!! json_encode(array_keys($departmentStats)) !!};
    var deptData = {!! json_encode(array_values($departmentStats)) !!};

    new Chart(deptCanvas, {
      type: 'doughnut',
      data: {
        labels: deptLabels,
        datasets: [{
          data: deptData,
          backgroundColor: ['#1572e8', '#48abf7', '#ffad46', '#2bbd7e', '#f3545d', '#1d7af3'],
          borderWidth: 0
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          position: 'bottom'
        }
      }
    });
  });
</script>
@endpush
