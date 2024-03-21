<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item {{ Request::routeIs('affairsTeacher.index*')?'active':'' }}">
        <a href="{{route('affairsTeacher.index')}}" class="sidebar-link">
        <i class="bi bi-house-door-fill"></i>
        <span>Beranda</span>
        </a>
    </li>

    <li class="sidebar-item has-sub {{ Request::routeIs('*')}}">
        <a href="#" class="sidebar-link">
        <i class="bi bi-stack"></i>
        <span>Pengaduan</span>
        </a>

        <ul class="submenu">
            <li class="submenu-item {{ Request::routeIs('affairsTeacher.report*')?'active':'' }}">
                <a href="{{route('affairsTeacher.report')}}" class="submenu-link">Pengaduan</a>
            </li>
        </ul>
    </li>
</ul>