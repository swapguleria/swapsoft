{{-- This is Side Bar Page  --}}
<aside class="main-sidebar">
    {{-- sidebar: style can be found in sidebar.less --}}
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ URL::to('img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Yash Pal</p>
                <a href="javascript:void(0);"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="javascript:void(0);" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class=" treeview">
                <a href="{{ route('SU-Dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
                </a>
            </li>
            <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-wrench"></i>
                    <span>Manage</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu ">
                    <li><a href="{{-- route('company') --}}"><i class="fa fa-bank"></i>Company</a></li>
                    <li><a href="{{-- route('department') --}}"><i class="fa fa-gitlab"></i>Departments</a></li>
                    <li><a href="{{-- route('roles') --}}"><i class="fa fa-user"></i>User Roles</a></li>
                    <li><a href="{{-- route('users') --}}"><i class="fa fa-users"></i>All Users</a></li>
                    <li><a href="{{-- route('holidays') --}}"><i class="fa fa-tasks"></i>Holidays</a></li>
                    <li><a href="{{-- route('password') --}}"><i class="fa fa-key"></i>Password Manager</a></li> 
                </ul>
            </li>
            <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-user"></i>
                    <span>My</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu ">
                    <li><a href="{{-- route('test-requests') --}}"><i class="fa fa-share-square-o"></i>Test Requests</a></li>
                    <li><a href="{{-- route('project-status') --}}"><i class="fa fa-check-square"></i>Project Status</a></li>
                    <li><a href="{{-- route('daily-status') --}}"><i class="fa fa-check-square-o"></i>Daily Status</a></li>
                    <li><a href="{{-- route('message') --}}"><i class="fa fa-envelope-square"></i>Messages</a></li>
                    <li><a href="{{-- route('team-todo') --}}"><i class="fa fa-pencil-square"></i>Team Todo</a></li>
                    <li><a href="{{-- route('leave-requests') --}}"><i class="fa fa-calendar"></i>Leave Requests</a></li>
                </ul>
            </li>
            <li class=" treeview">
                <a href="{{ route('SU-Projects') }}">
                    <i class="fa fa-product-hunt"></i> <span>Projects</span> 
                </a>
            </li>
            <li class=" treeview">
                <a href="{{-- route('tasks') --}}">
                    <i class="fa fa-tumblr-square"></i> <span>Tasks</span> 
                </a>
            </li>
            {{-- <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-laptop"></i>
                    <span>Projects</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('active-project') }}"><i class="fa fa-circle-o"></i>Active</a></li>
                    <li><a href="{{ route('new-project') }}"><i class="fa fa-circle-o"></i>Add New</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>Completed</a></li>
                    <li><a href="{{  route('overdue-project') }}"><i class="fa fa-circle-o"></i>Over Due</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>Upcoming</a></li>
                    <li><a href="{{ route('all-project') }}"><i class="fa fa-circle-o"></i>View All</a></li>
                </ul>
            </li> 
            <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-tasks"></i> <span>Tasks</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>Active</a></li>
                    <li><a href="{{ route('new-task') }}"><i class="fa fa-circle-o"></i>Add New</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>Completed</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>Over Due</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>Pending</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>View All</a></li>
                </ul>
            </li>--}}
            <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-users"></i>
                    <span>Team</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>Add New</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>Statuses</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>View All</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>Know Your Team</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-calendar"></i>
                    <span>Events</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{-- route('event-calendar') --}}"><i class="fa fa-circle-o"></i>Calender</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>Statuses</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>View All</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-circle-o"></i>Know Your Team</a></li>
                </ul>
            </li>
            <li class="header">QUICK LINKS</li>
            <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-red"></i> <span>Discussion</span></a></li>
            <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-yellow"></i> <span>Request Help</span></a></li>
            <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-aqua"></i> <span>Send Mail</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>