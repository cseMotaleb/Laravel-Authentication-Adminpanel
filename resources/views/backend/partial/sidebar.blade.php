<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ Auth::user()->user_type }}</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Admin Activities</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
             @can('role-list')
            <a class="collapse-item" href="{{ route('roles.index') }}">Roles</a>
            @endcan
            @can('permission-list')
            <a class="collapse-item" href="{{ route('permissions.index') }}">Permisions</a>
            @endcan
            @can('user-list')
            <a class="collapse-item" href="{{ route('users.index') }}">Users</a>
            @endcan
          </div>
        </div>
      </li>

      <!-- Divider -->
      <!-- <hr class="sidebar-divider">
      <li class="nav-item">
        @can('blog-list')
        <a class="nav-link collapsed" href="#">
          <i class="fas fa-ticket-alt"></i>
          <span>Live Competition</span>
        </a>
        @endcan
      </li> -->
    </ul>
    <!-- End of Sidebar