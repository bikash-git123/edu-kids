<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
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
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <!-- Dashboard -->
        <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
          <a href="{{ route('admin.dashboard') }}">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Management</h4>
        </li>

        <!-- Students -->
        <li class="nav-item {{ request()->routeIs('admin.students.*') ? 'active' : '' }}">
          <a href="{{ route('admin.students.index') }}">
            <i class="fas fa-user-graduate"></i>
            <p>Students</p>
          </a>
        </li>

        <!-- Teachers / Faculty -->
        <li class="nav-item {{ request()->routeIs('admin.teachers.*') ? 'active' : '' }}">
          <a href="{{ route('admin.teachers.index') }}">
            <i class="fas fa-chalkboard-teacher"></i>
            <p>Faculty & Teachers</p>
          </a>
        </li>

        <!-- Courses & Classes -->
        <li class="nav-item {{ request()->routeIs('admin.courses.*') ? 'active' : '' }}">
          <a href="{{ route('admin.courses.index') }}">
            <i class="fas fa-book-open"></i>
            <p>Courses & Classes</p>
          </a>
        </li>

        <!-- Notice Board -->
        <li class="nav-item {{ request()->routeIs('admin.notices.*') ? 'active' : '' }}">
          <a href="{{ route('admin.notices.index') }}">
            <i class="fas fa-bullhorn"></i>
            <p>Notice Board</p>
          </a>
        </li>

        <!-- Event Gallery -->
        <li class="nav-item {{ request()->routeIs('admin.galleries.*') ? 'active' : '' }}">
          <a href="{{ route('admin.galleries.index') }}">
            <i class="fas fa-images"></i>
            <p>Event Gallery</p>
          </a>
        </li>

      </ul>
    </div>
  </div>
</div>
