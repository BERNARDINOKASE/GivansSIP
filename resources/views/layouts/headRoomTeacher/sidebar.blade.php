<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item {{ Request::routeIs('hrTeacher.index*')?'active':'' }}">
        <a href="{{route('hrTeacher.index')}}" class="sidebar-link">
        <i class="bi bi-house-door-fill"></i>
        <span>Beranda</span>
        </a>
    </li>

    <li class="sidebar-item has-sub {{ Request::routeIs('hrTeacher.reports*')}}">
        <a href="#" class="sidebar-link">
        <i class="bi bi-stack"></i>
        <span>Pengaduan</span>
        </a>

        <ul class="submenu">
    
            <li class="submenu-item {{ Request::routeIs('hrTeacher.reports*')?'active':'' }}">
                <a href="{{route('hrTeacher.reports')}}" class="submenu-link">Pengaduan</a>
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