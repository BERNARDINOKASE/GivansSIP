<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item {{ Request::routeIs('student.index*')?'active':'' }}">
        <a href="{{route('student.index')}}" class="sidebar-link">
        <i class="bi bi-house-door-fill"></i>
        <span>Beranda</span>
        </a>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class="sidebar-link">
        <i class="bi bi-stack"></i>
        <span>Pengaduan</span>
        </a>

        <ul class="submenu">
    
            <li class="submenu-item {{ Request::routeIs('gTeacher.reportsWaiting*')?'active':'' }}">
                <a href="{{route('gTeacher.reportsWaiting')}}" class="submenu-link">Pengaduan Belum di Proses</a>
            </li>

            <li class="submenu-item {{ Request::routeIs('gTeacher.reportOnProgress*')?'active':'' }}">
                <a href="{{route('gTeacher.reportOnProgress')}}" class="submenu-link">Pengaduan Dalam Proses</a>
            </li>
        </ul>
    </li>
</ul>