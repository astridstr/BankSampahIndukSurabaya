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
        <li class="header">Rapot Nasabah</li>
          <li>
            <a href="{{ url('/rapotnasabah') }}"><i class="fa fa-user"></i> 
              <span>Rapot Nasabah</span></a>
          </li>
          <!-- <li>
            <a href="{{ url('/rapotnasabah-pertahun') }}"><i class="fa fa-user"></i> 
              <span>Pertahun</span></a>
          </li> -->
          <!-- <li>
            <a href="{{ url('/rapotnasabah-perwilayah') }}"><i class="fa fa-group"></i> 
              <span>Perwilayah</span>
            </a>
          </li> -->
          <li>
          <a href="{{ url('/home') }}">
            <span class="glyphicon glyphicon-menu-left"></span> <span>Back to menu</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>