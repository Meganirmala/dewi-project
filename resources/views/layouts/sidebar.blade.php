<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-file-text"></i> <span>Article</span>
          </a>
        </li>
        <li>
          <a href="{{ route('galleries.index') }}">
            <i class="fa fa-camera"></i> <span>Gallery</span>
          </a>
        </li>
        <li>
          <a href="{{ route('fasilitas.index') }}">
            <i class="fa fa-picture-o"></i> <span>Fasilitas Desa</span>
          </a>
        </li>
        <li>
          <a href="{{ route('profileDesa') }}">
            <i class="fa fa-product-hunt"></i> <span>Profile Desa</span>
          </a>
        </li>
        <li>
          <a href="{{ route('contact') }}">
            <i class="fa fa-address-book"></i> <span>Contact</span>
          </a>
        </li>
        <li>
          <a href="{{ route('kategori.index') }}">
            <i class="fa fa-cogs"></i> <span>Kategori</span>
          </a>
        </li>
       @role('Admin')
        <li class="header">USER MANAGEMENT</li>
        <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o text-red"></i> <span>User Management</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>User Log</span></a></li>
        <li><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o text-aqua"></i> <span>Roles</span></a></li>
       @endrole
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>