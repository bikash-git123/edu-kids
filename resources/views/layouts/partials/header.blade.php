<div class="main-header">
  <div class="main-header-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="{{ route('admin.dashboard') }}" class="logo">
        <span class="navbar-brand text-white fw-bold fs-4">
          <i class="fas fa-graduation-cap text-primary me-2"></i>SchoolAdmin
        </span>
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <!-- Navbar Header -->
  <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-line-primary navbar-header-left navbar-expand-lg p-0 d-none d-lg-flex">
        <span class="text-muted fw-bold">Academic Session 2025 - 2026</span>
      </nav>

      <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
        <!-- Quick Action Shortcuts -->
        <li class="nav-item topbar-icon dropdown hidden-caret" style="padding-right: 20px;">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"
            aria-haspopup="true">
            <i class="fas fa-plus-circle"></i> &nbsp;Quick Add
          </a>
          <ul class="dropdown-menu dropdown-user animated fadeIn">
            <div class="dropdown-user-scroll scrollbar-outer">
              <li>
                <a class="dropdown-item" href="{{ route('admin.students.create') }}">
                  <i class="fas fa-user-plus text-success me-2"></i> Add New Student
                </a>
                <a class="dropdown-item" href="{{ route('admin.teachers.create') }}">
                  <i class="fas fa-chalkboard-teacher text-info me-2"></i> Add Faculty Member
                </a>
                <a class="dropdown-item" href="{{ route('admin.courses.create') }}">
                  <i class="fas fa-book text-warning me-2"></i> Create Course
                </a>
                <a class="dropdown-item" href="{{ route('admin.notices.create') }}">
                  <i class="fas fa-bullhorn text-primary me-2"></i> Publish Announcement
                </a>
              </li>
            </div>
          </ul>
        </li>

        <!-- User Profile Dropdown -->
        <li class="nav-item topbar-user dropdown hidden-caret">
          <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
            <div class="avatar-sm">
              <img src="{{ asset(Auth::user()->avatar ?? 'assets/img/profile.jpg') }}" alt="User Avatar"
                class="avatar-img rounded-circle" />
            </div>
            <span class="profile-username">
              <span class="op-7">Hi,</span>
              <span class="fw-bold">{{ Auth::user()->name ?? 'Administrator' }}</span>
            </span>
          </a>
          <ul class="dropdown-menu dropdown-user animated fadeIn">
            <div class="dropdown-user-scroll scrollbar-outer">
              <li>
                <div class="user-box">
                  <div class="avatar-lg">
                    <img src="{{ asset(Auth::user()->avatar ?? 'assets/img/profile.jpg') }}" alt="profile image"
                      class="avatar-img rounded" />
                  </div>
                  <div class="u-text">
                    <h4>{{ Auth::user()->name ?? 'Admin User' }}</h4>
                    <p class="text-muted">{{ Auth::user()->email ?? 'admin@school.com' }}</p>
                    <span class="badge bg-primary">Administrator</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="dropdown-divider"></div>
                <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="dropdown-item text-danger border-0 bg-transparent">
                    <i class="fas fa-power-off me-2"></i> Logout
                  </button>
                </form>
              </li>
            </div>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End Navbar -->
</div>