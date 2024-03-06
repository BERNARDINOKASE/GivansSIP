<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item {{ Request::routeIs('hrTeacher.index*')?'active':'' }}">
        <a href="{{route('hrTeacher.index')}}" class="sidebar-link">
        <i class="bi bi-house-door-fill"></i>
        <span>Beranda</span>
        </a>
    </li>

    <li class="sidebar-item has-sub {{ Request::routeIs('hrTeacher.reportsWaiting*')
    |Request::routeIs('hrTeacher.reportOnProgress*')
    |Request::routeIs('hrTeacher.reportSuccess*')?'active':'' }}">
        <a href="#" class="sidebar-link">
        <i class="bi bi-stack"></i>
        <span>Pengaduan</span>
        </a>

        <ul class="submenu">
    
            <li class="submenu-item {{ Request::routeIs('hrTeacher.reportsWaiting*')?'active':'' }}">
                <a href="{{route('hrTeacher.reportsWaiting')}}" class="submenu-link">Pengaduan Belum di Proses</a>
            </li>

            <li class="submenu-item {{ Request::routeIs('hrTeacher.reportOnProgress*')?'active':'' }}">
                <a href="{{route('hrTeacher.reportOnProgress')}}" class="submenu-link">Pengaduan Dalam Proses</a>
            </li>

            <li class="submenu-item {{ Request::routeIs('hrTeacher.reportSuccess*')?'active':'' }}">
                <a href="{{route('hrTeacher.reportSuccess')}}" class="submenu-link">Pengaduan Selesai</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item {{ Request::routeIs('hrTeacher.studentsIndex*')?'active':'' }}">
        <a href="{{route('hrTeacher.studentsIndex')}}" class="sidebar-link">
        <i class="bi bi-house-door-fill"></i>
        <span>Siswa</span>
        </a>
    </li>
</ul>