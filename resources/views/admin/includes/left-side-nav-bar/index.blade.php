<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{asset('/')}}admin/assets/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">Engr. Jakirul</div><small>Administrator</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Companies</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('company.add')}}">Add Companies</a>
                    </li>
                    <li>
                        <a href="{{route('company.manage')}}">Mange Companies</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                    <span class="nav-label">Employees</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('employee.add')}}">Add Employees</a>
                    </li>
                    <li>
                        <a href="{{route('employee.manage')}}">Manage Employees</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
