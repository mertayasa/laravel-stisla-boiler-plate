<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{route('dashboard.dashboard')}}">Management Kos</a>
        <p class="text-center mb-0">Hi, {{Auth::user()->nama}}</p>
        <p class="text-center mb-0">Login sebagai <b> {{userRole()}} </b></p>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          
          <li class="nav-item dropdown {{isActive('dashboard')}}">
            <a href="{{route('dashboard.dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          
          <li class="nav-item dropdown {{isActive('user')}}">
            <a href="{{route('user.index')}}" class="nav-link"><i class="fas fa-user"></i><span>Pengguna</span></a>
          </li>

          <li class="menu-header">Starter</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Menu Dropdown</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="layout-default.html">Dropdown 1</a></li>
              <li><a class="nav-link" href="layout-transparent.html">Dropdown 2</a></li>
              <li><a class="nav-link" href="layout-top-navigation.html">Dropdown 3</a></li>
            </ul>
          </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
          <a href="=#" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Extra Tombol
          </a>
        </div>
    </aside>
  </div>