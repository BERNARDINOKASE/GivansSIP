<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item {{ Request::routeIs('guideTeacher.index*')?'active':'' }}">
        <a href="{{route('guideTeacher.index')}}" class="sidebar-link">
        <i class="bi bi-house-door-fill"></i>
        <span>Beranda</span>
        </a>
    </li>

    <li class="sidebar-item has-sub {{ Request::routeIs('guideTeacher.report*')}}">
        <a href="#" class="sidebar-link">
        <i class="bi bi-stack"></i>
        <span>Pengaduan</span>
        </a>

        <ul class="submenu">
            <li class="submenu-item {{ Request::routeIs('guideTeacher.report*')?'active':'' }}">
                <a href="{{route('guideTeacher.report')}}" class="submenu-link">Pengaduan</a>
            </li>
        </ul>
    </li>
</ul>