<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="">
        <img src="{{asset('logo/')}}/givans-logo1.svg" alt="Logo" />
        {{-- Logo --}}
        {{-- <h3 class="text-white">SIP - Givans</h3> --}}
    </a>
    <button class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false"
    aria-label="Toggle navigation" 
    >
        <span class="toggler-icon"> </span>
        <span class="toggler-icon"> </span>
        <span class="toggler-icon"> </span>
    </button>

    <div
    class="collapse navbar-collapse sub-menu-bar"
    id="navbarSupportedContent"
    >
    <ul id="nav" class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="page-scroll active" href="#home">Home</a>
        </li>
        <li class="nav-item">
            <a class="page-scroll" href="#features">Features</a>
        </li>
        <li class="nav-item">
            <a class="page-scroll" href="#about">About</a>
        </li>
        <li class="nav-item">
            <a class="page-scroll" href="#facts">Why</a>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)">Team</a>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)">Blog</a>
        </li>
        <li class="navbar-btn">
            <a class="main-btn d-block" href="{{route('login')}}">
                Login
            </a>
        </li>
    </ul>
    </div>
</nav>