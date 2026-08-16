@extends('layouts.app')

@section('title', $notice->title)

@section('content')
<div class="page-header">
  <h3 class="fw-bold mb-3">Notice Detail</h3>
  <ul class="breadcrumbs mb-3">
    <li class="nav-home"><a href="{{ route('admin.dashboard') }}"><i class="icon-home"></i></a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="{{ route('admin.notices.index') }}">Notice Board</a></li>
    <li class="separator"><i class="icon-arrow-right"></i></li>
    <li class="nav-item"><a href="#">View Notice</a></li>
  </ul>
</div>

<div class="row">
  <div class="col-md-9 mx-auto">
    <div class="card card-round">
      <div class="card-header bg-light d-flex justify-content-between align-items-center">
        <div>
          <span class="badge bg-secondary me-2">{{ $notice->target_audience }}</span>
          @if($notice->priority == 'Urgent')
            <span class="badge bg-danger">Urgent</span>
          @elseif($notice->priority == 'High')
            <span class="badge bg-warning text-dark">High</span>
          @else
            <span class="badge bg-info">Normal Priority</span>
          @endif
        </div>
        <small class="text-muted"><i class="far fa-calendar-alt me-1"></i> Posted on {{ \Carbon\Carbon::parse($notice->posted_at)->format('F d, Y') }}</small>
      </div>
      <div class="card-body p-4">
        <h2 class="fw-bold text-dark mb-4">{{ $notice->title }}</h2>
        
        <div class="notice-content fs-5 text-secondary lead mb-4" style="line-height: 1.8;">
          {!! nl2br(e($notice->content)) !!}
        </div>

        <hr class="my-4">

        <div class="d-flex justify-content-between align-items-center">
          <a href="{{ route('admin.notices.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back to Notice Board
          </a>
          <div>
            <a href="{{ route('admin.notices.edit', $notice) }}" class="btn btn-primary me-2">
              <i class="fas fa-edit me-1"></i> Edit Announcement
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
