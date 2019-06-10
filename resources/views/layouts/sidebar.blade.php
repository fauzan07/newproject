

<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar control-sidebar-light">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->


      <div class="user-panel">
       
       
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

       @can('isadmin')
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Catagory</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('dindex')}}"><i class="fa fa-circle-o"></i> Home</a></li>
           @can('isadmin') <li><a href="{{url('category/create')}}"><i class="fa fa-circle-o"></i> Add Category</a></li>@endcan
            <li><a href="{{url('category')}}"><i class="fa fa-circle-o"></i> View Category</a></li>
          </ul>
        </li>
        @endcan



       @can('isadmin')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('dindex')}}"><i class="fa fa-circle-o"></i> Home</a></li>
            <li><a href="{{url('allusers')}}"><i class="fa fa-circle-o"></i>View users</a></li>
          </ul>
        </li>
        @endcan
     

       @can('isadmin')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Project</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('dindex')}}"><i class="fa fa-circle-o"></i> Home</a></li>
            @can('isadmin')<li><a href="{{url('project/create')}}"><i class="fa fa-circle-o"></i> Add Project</a></li>@endcan
            <li><a href="{{url('project')}}"><i class="fa fa-circle-o"></i> View project</a></li>
          </ul>
        </li>
        @endcan


        @can('isadmin')
      <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Catagory assign</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('dindex')}}"><i class="fa fa-circle-o"></i> Home</a></li>
            <li><a href="{{url('catagoryassign/create')}}"><i class="fa fa-circle-o"></i> Assign Category</a></li>
          </ul>
        </li>
        @endcan

      @can('isadmin')
      <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Project assign</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('dindex')}}"><i class="fa fa-circle-o"></i> Home</a></li>
            <li><a href="{{url('projectassign/create')}}"><i class="fa fa-circle-o"></i> Assign Project</a></li>
          </ul>
        </li>
        @endcan

       @can('isadmin')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>approved user</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('users')}}"><i class="fa fa-circle-o"></i>approved user</a></li>
          </ul>
        </li>
     @endcan

       @can('isadmin')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>track user</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('usert')}}"><i class="fa fa-circle-o"></i>track user</a></li>
          </ul>
        </li>
     @endcan


  @cannot('isadmin')
      <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i>
            <span>Project details</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('dindex')}}"><i class="fa fa-circle-o"></i> Home</a></li>
            <li><a href="{{url('projectdetail')}}"><i class="fa fa-circle-o"></i> View Project</a></li>
          </ul>
        </li>
        @endcannot


       @cannot('isadmin')
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i>
            <span>logout</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('logout')}}"><i class="fa fa-circle-o"></i>logout</a></li>
          </ul>
        </li>
     @endcannot
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
