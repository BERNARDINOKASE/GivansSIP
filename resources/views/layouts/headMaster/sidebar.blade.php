<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item {{ Request::routeIs('headMaster.index*')?'active':'' }}">
        <a href="{{route('headMaster.index')}}" class="sidebar-link">
        <i class="bi bi-house-door-fill"></i>
        <span>Beranda</span>
        </a>
    </li>

    <li class="sidebar-item has-sub">
        <a href="" class="sidebar-link">
        <i class="bi bi-database"></i>
        <span>Data </span>
        </a>

        <ul class="submenu">
            <li class="submenu-item">
                <a href="" class="submenu-link">Data Kasus</a>
            </li>

            <li class="submenu-item {{ Request::routeIs('*')?'active':'' }}">
                <a href="" class="submenu-link">Data Laporan</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class="sidebar-link">
        <i class="bi bi-people-fill"></i>
        <span>Pengguna</span>
        </a>

        <ul class="submenu active">
        <li class="submenu-item">
            <a href="" class="submenu-link"
            >Siswa</a
            >
        </li>

        <li class="submenu-item">
            <a href="" class="submenu-link"
            >Wali Kelas</a
            >
        </li>

        <li class="submenu-item">
            <a href="" class="submenu-link"
            >Guru BK</a
            >
        </li>

        <li class="submenu-item">
            <a href="" class="submenu-link"
            >Kesiswaan</a
            >
        </li>

        <li class="submenu-item">
            <a href="" class="submenu-link"
            >Kepala Sekolah</a
            >
        </li>
        </ul>
    </li>

   