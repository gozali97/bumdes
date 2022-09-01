<aside class="main-sidebar sidebar-dark-primary elevation-4 menu-aside">
    <a href="#" class="brand-link" style="border-color: white;">
      <img class="bumdes-logo" src="{{ asset('/assets/admin/img/bumdes-logo.png') }}" alt="Bumdes Logo" style="opacity: .8">
      <span class="brand-text font-weight-bold text-white">Bumdes.id</span>
    </a>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-color: white;">
        <div class="image">
          <img src="{{ asset('/assets/admin/img/user-logo.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="nama-login" style="color: white;">Admin Bumdes</a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
          <li class="nav-item">
            <a href="{{ url('/admin') }}" class="nav-link" style="color: white;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/akun-terdaftar') }}" class="nav-link" style="color: white;">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Akun Terdaftar
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
</aside>