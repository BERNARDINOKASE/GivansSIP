<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item {{ Request::routeIs('guideTeacher.index*')?'active':'' }}">
        <a href="{{route('guideTeacher.index')}}" class="sidebar-link">
        <i class="bi bi-house-door-fill"></i>
        <span>Beranda</span>
        </a>
    </li>

    <li class="sidebar-item has-sub {{ Request::routeIs('*')
    |Request::routeIs('*')
    |Request::routeIs('*')?'active':'' }}">
        <a href="#" class="sidebar-link">
        <i class="bi bi-stack"></i>
        <span>Pengaduan</span>
        </a>

        <ul class="submenu">
    
            <li class="submenu-item {{ Request::routeIs('*')?'active':'' }}">
                <a href="" class="submenu-link">Pengaduan Belum di Proses</a>
            </li>

            <li class="submenu-item {{ Request::routeIs('*')?'active':'' }}">
                <a href="" class="submenu-link">Pengaduan Dalam Proses</a>
            </li>

            <li class="submenu-item {{ Request::routeIs('*')?'active':'' }}">
                <a href="" class="submenu-link">Pengaduan Selesai</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item {{ Request::routeIs('*')?'active':'' }}">
        <a href="{{route('')}}" class="sidebar-link">
        <i class="bi bi-house-door-fill"></i>
        <span>Siswa</span>
        </a>
    </li>
</ul>