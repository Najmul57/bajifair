<aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <hr>
      <ul class="sidebar-menu">
        <li class="treeview">
            <a href="{{url('/')}}" target="_blank">
              <i class="fa fa-globe"></i> <span><strong class="h4">Website</strong></span>
            </a>
          </li>
        <li class="treeview">
          <a href="{{route('dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('quick.master')}}">
            <i class="fa fa-users"></i> <span>Quick Master List</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('admin')}}">
            <i class="fa fa-users"></i> <span>Admin List</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('subadmin')}}">
            <i class="fa fa-users"></i> <span>Sub Admin List</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Super Agent List</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Master Agent List</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Customer Service List</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Site Settings</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>