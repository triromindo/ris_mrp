<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"><img src="{{ asset('img/logo/logo-2.webp') }}" width="180px"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"><img src="{{ asset('img/logo/logo-3.webp') }}" width="40px"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::path() == '/' || Request::path() == 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard') }}">
                    <i class="fas fa-fire"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="dropdown {{ Request::path() == 'raw-material' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i><span>Master</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ url('raw-material') }}">Raw Material</a></li>
                    <li><a class="nav-link" href="index.html">Finish Product</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
