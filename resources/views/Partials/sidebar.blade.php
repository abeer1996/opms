<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="assets/img/Kodeeo.jpg" hight='50px'
            width='50px' alt="User Image">
        <div>
            <p class="app-sidebar__user-name">Kodeeo</p>
            <p class="app-sidebar__user-designation">Admin</p>
        </div>
    </div>
    <ul class="app-menu">
    @if(auth()->user()->role=='admin')
        <li><a class="app-menu__item active" href="{{route('dashboard')}}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Registration</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('user.list')}}"><i class="icon fa fa-circle-o"></i>User Info</a></li>

                <li><a class="treeview-item" href="{{route('employee.list')}}"><i
                            class="icon fa fa-circle-o"></i>Employee Registration</a></li>
                <li><a class="treeview-item" href="{{route('manager.list')}}"><i class="icon fa fa-circle-o"></i>Manager
                        Registration</a></li>
            </ul>
        </li>

        <li><a class="app-menu__item" href="{{route('department.list')}}"><i
                    class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Department Info</span></a>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Project</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('project.list')}}"><i class="icon fa fa-circle-o"></i>
                        Project List</a></li>
                <li><a class="treeview-item" href="{{route('assign.list')}}"><i class="icon fa fa-circle-o"></i> Assign
                        Project List</a></li>
            </ul>
        </li>


        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span
                    class="app-menu__label">Budget Info</span></a></li>

        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span
                    class="app-menu__label">Report</span></a></li>

        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span
                    class="app-menu__label">Emergency Notice</span></a></li>
        @endif

        @if(auth()->user()->role=='manager')
        <li><a class="app-menu__item active" href="{{route('dashboard')}}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Employee Info</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('employee.list')}}"><i
                            class="icon fa fa-circle-o"></i>Employee List</a></li>
                <li><a class="treeview-item" href="{{route('manager.list')}}"><i class="icon fa fa-circle-o"></i>Manager
                        List</a></li>
            </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
                    class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Project Info</span><i
                    class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="{{route('project.list')}}"><i class="icon fa fa-circle-o"></i>
                        Project List</a></li>
                <li><a class="treeview-item" href="{{route('assign.list')}}"><i class="icon fa fa-circle-o"></i> Assign
                        Project List</a></li>
            </ul>
        </li>
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span
                    class="app-menu__label">Budget Info</span></a></li>
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span
                    class="app-menu__label">Emergency Notice</span></a></li>   
        @endif

        @if(auth()->user()->role=='employee')
        <li><a class="app-menu__item active" href="#"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">My Profile</span></a></li>
        <li><a class="app-menu__item active" href="{{route('assign.list')}}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Assign Project List</span></a></li>
        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span
                    class="app-menu__label">Emergency Notice</span></a></li>   
        @endif



</aside>