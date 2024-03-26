<ul class="menu">
    <li class="sidebar-title">Menu</li>

    <li class="sidebar-item {{ Request::routeIs('admin.index*')?'active':'' }}">
        <a href="{{route('admin.index')}}" class="sidebar-link">
        <i class="bi bi-house-door-fill"></i>
        <span>Beranda</span>
        </a>
    </li>

    <li class="sidebar-item has-sub {{ Request::routeIs('offense.index*')|Request::routeIs('report.index*')?'active':'' }}">
        <a href="" class="sidebar-link">
        <i class="bi bi-database"></i>
        <span>Data </span>
        </a>

        <ul class="submenu">
            <li class="submenu-item {{ Request::routeIs('offense.index*')?'active':'' }}">
                <a href="{{route('offense.index')}}" class="submenu-link ">Data Kasus</a>
            </li>

            <li class="submenu-item {{ Request::routeIs('report.index*')?'active':'' }}">
                <a href="{{route('report.index')}}" class="submenu-link">Data Laporan</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class="sidebar-link">
        <i class="bi bi-grid-fill"></i>
        <span> Kelas</span>
        </a>

        <ul class="submenu">
        <li class="submenu-item">
            <a href="/classroom?kelas=X" class="submenu-link"
            >Kelas X</a
            >
        </li>

        <li class="submenu-item">
            <a href="/classroom?kelas=XI" class="submenu-link"
            >Kelas XI</a
            >
        </li>
        <li class="submenu-item">
            <a href="/classroom?kelas=XII" class="submenu-link"
            >Kelas XII</a
            >
        </li>
        </ul>
    </li>
    <li class="sidebar-item has-sub {{ Request::routeIs('admin.allStudent*')
    |Request::routeIs('admin.allHeadRoomTeacher*')
    |Request::routeIs('admin.allGuideTeacher*')
    |Request::routeIs('admin.allAffairsTeacher*')
    ?'active':'' }}">
        <a href="" class="sidebar-link">
        <i class="bi bi-people-fill"></i>
        <span>Pengguna</span>
        </a>

        <ul class="submenu active">
        <li class="submenu-item {{ Request::routeIs('admin.allStudent*')?'active':'' }}">
            <a href="{{route('admin.allStudent')}}" class="submenu-link"
            >Siswa</a
            >
        </li>

        <li class="submenu-item">
            <a href="{{route('admin.allHeadRoomTeacher')}}" class="submenu-link"
            >Wali Kelas</a
            >
        </li>

        <li class="submenu-item">
            <a href="{{route('admin.allGuideTeacher')}}" class="submenu-link"
            >Guru BK</a
            >
        </li>

        <li class="submenu-item">
            <a href="{{route('admin.allAffairsTeacher')}}" class="submenu-link"
            >Kesiswaan</a
            >
        </li>

        <li class="submenu-item">
            <a href="{{route('admin.allHeadMaster')}}" class="submenu-link"
            >Kepala Sekolah</a
            >
        </li>
        </ul>
    </li>

   