<!-- START HEADER-->
<header class="header">
    <div class="page-brand">
        <a class="link" href="{{route('dashboard')}}">
                    <span class="brand">Engr.
                        <span class="brand-tip">Jakirul</span>
                    </span>
            <span class="brand-mini">EJ</span>
        </a>
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li>
                <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
            </li>

        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <img src="{{asset('/')}}admin/assets/img/admin-avatar.png" />
                    <span></span>Admin<i class="fa fa-angle-down m-l-5"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-divider"></li>
                    <a class="dropdown-item" href="login.html" onclick="event.preventDefault(); document.getElementById('logoutForm').submit(); "><i class="fa fa-power-off"></i>Logout</a>
                    <form action="{{route('logout')}}" method="POST" id="logoutForm">
                        @csrf
                    </form>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>
<!-- END HEADER-->
