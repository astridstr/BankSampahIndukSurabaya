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
        <li class="header"> Menu</li>
        <li>
          <a href="{{url('/datasampah')}}">
            <i class="fa fa-recycle"></i> <span>Sampah</span>
          </a>
        </li>
        <li>
          <a href="{{ url('/home') }}">
            <span class="glyphicon glyphicon-menu-left"></span> <span>Back to menu</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>