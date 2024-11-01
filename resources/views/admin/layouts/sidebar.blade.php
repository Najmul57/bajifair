<aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel bajifair">
        {{-- <div class="pull-left image">
          <img src="{{asset('upload/logo.logo')}}" class="img-circle" alt="User Image">
        </div> --}}
        <div class="pull-left info">
          <p><span class="hidden-xs">{{ ucwords(auth()->user()->name) }}</span></p>
          {{-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> --}}
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
          <a href="{{route('super.agent')}}">
            <i class="fa fa-users"></i> <span>Super Agent List</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('master.agent')}}">
            <i class="fa fa-users"></i> <span>Master Agent List</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('customer')}}">
            <i class="fa fa-users"></i> <span>Customer Service List</span>
          </a>
        </li>
        </li>
        <li class="treeview">
          <a href="{{route('setting')}}">
            <i class="fa fa-gear"></i> <span>Site Settings</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>