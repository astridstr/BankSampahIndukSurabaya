<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img class="user-image" src="{{ asset('img/logo-bsi.png') }}" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Nasabah</li>
          <li>
            <a href="{{ url('/nasabah') }}"><i class="fa fa-user"></i> 
              <span>Individu</span></a>
          </li>
          <li>
            <a href="{{ url('/nasabah-kolektif') }}"><i class="fa fa-group"></i> 
              <span>Kolektif</span>
            </a>
          </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>