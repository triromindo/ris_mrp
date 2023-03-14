<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <i class="fas fa-user-circle ml-0 mr-2 fa-3x"></i>
                <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->username }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">{{ Auth::user()->role->name }} / Last
                    Login{{ Auth::user()->last_login_timestamp }}
                </div>
                <a href="{{ url('change-password') }}" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Change Password
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ url('logout') }}" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
