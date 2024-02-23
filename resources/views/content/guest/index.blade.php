@extends('layouts.dashboard.main')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Vertical Layout with Navbar</h3>
                <p class="text-subtitle text-muted">
                    Navbar will appear on the top of the page.
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Layout Vertical Navbar
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Dummy Text</h4>
            </div>
            <div class="card-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                    mollis tincidunt tempus. Duis vitae facilisis enim, at
                    rutrum lacus. Nam at nisl ut ex egestas placerat sodales id
                    quam. Aenean sit amet nibh quis lacus pellentesque venenatis
                    vitae at justo. Orci varius natoque penatibus et magnis dis
                    parturient montes, nascetur ridiculus mus. Suspendisse
                    venenatis tincidunt odio ut rutrum. Maecenas ut urna
                    venenatis, dapibus tortor sed, ultrices justo. Phasellus
                    scelerisque, nibh quis gravida venenatis, nibh mi lacinia
                    est, et porta purus nisi eget nibh. Fusce pretium vestibulum
                    sagittis. Donec sodales velit cursus convallis sollicitudin.
                    Nunc vel scelerisque elit, eget facilisis tellus. Donec id
                    molestie ipsum. Nunc tincidunt tellus sed felis vulputate
                    euismod.
                </p>
                <p>
                    Proin accumsan nec arcu sit amet volutpat. Proin non risus
                    luctus, tempus quam quis, volutpat orci. Phasellus commodo
                    arcu dui, ut convallis quam sodales maximus. Aenean
                    sollicitudin massa a quam fermentum, et efficitur metus
                    convallis. Curabitur nec laoreet ipsum, eu congue sem. Nunc
                    pellentesque quis erat at gravida. Vestibulum dapibus
                    efficitur felis, vel luctus libero congue eget. Donec mollis
                    pellentesque arcu, eu commodo nunc porta sit amet. In
                    commodo augue id mauris tempor, sed dignissim nulla
                    facilisis. Ut non mattis justo, ut placerat justo.
                    Vestibulum scelerisque cursus facilisis. Suspendisse velit
                    justo, scelerisque ac ultrices eu, consectetur ac odio.
                </p>
                <p>
                    In pharetra quam vel lobortis fermentum. Nulla vel risus ut
                    sapien porttitor volutpat eu ac lorem. Vestibulum porta elit
                    magna, ut ultrices sem fermentum ut. Vestibulum blandit eros
                    ut imperdiet porttitor. Pellentesque tempus nunc sed augue
                    auctor eleifend. Sed nisi sem, lobortis eget faucibus
                    placerat, hendrerit vitae elit. Vestibulum elit orci,
                    pretium vel libero at, imperdiet congue lectus. Praesent
                    rutrum id turpis non aliquam. Cras dignissim, metus vitae
                    aliquam faucibus, elit augue dignissim nulla, bibendum
                    consectetur leo libero a tortor. Vestibulum non tincidunt
                    nibh. Ut imperdiet elit vel vehicula ultricies. Nulla
                    maximus justo sit amet fringilla laoreet. Aliquam malesuada
                    diam in augue mattis aliquam. Pellentesque id eros
                    dignissim, dapibus sem ac, molestie dolor. Mauris purus
                    lacus, tempor sit amet vestibulum vitae, ultrices eu urna.
                </p>
            </div>
        </div>
    </section>
</div>
<section class="row">
    <div class="col-12 col-lg-9">
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldShow"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Profile Views</h6>
                                <h6 class="font-extrabold mb-0">112.000</h6>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card"> 
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon blue mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Followers</h6>
                                <h6 class="font-extrabold mb-0">183.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon green mb-2">
                                    <i class="iconly-boldAdd-User"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Following</h6>
                                <h6 class="font-extrabold mb-0">80.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon red mb-2">
                                    <i class="iconly-boldBookmark"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Saved Post</h6>
                                <h6 class="font-extrabold mb-0">112</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile Visit</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-profile-visit"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Profile Visit</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div class="d-flex align-items-center">
                                    <svg class="bi text-primary" width="32" height="32" fill="blue"
                                        style="width:10px">
                                        <use xlink:href="{{asset('dashboard/')}}/static/images/bootstrap-icons.svg#circle-fill" />
                                    </svg>
                                    <h5 class="mb-0 ms-3">Europe</h5>
                                </div>
                            </div>
                            <div class="col-5">
                                <h5 class="mb-0 text-end">862</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-europe"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="d-flex align-items-center">
                                    <svg class="bi text-success" width="32" height="32" fill="blue"
                                        style="width:10px">
                                        <use
                                            xlink:href="{{asset('dashboard/')}}/static/images/bootstrap-icons.svg#circle-fill" />
                                    </svg>
                                    <h5 class="mb-0 ms-3">America</h5>
                                </div>
                            </div>
                            <div class="col-5">
                                <h5 class="mb-0 text-end">375</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-america"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <div class="d-flex align-items-center">
                                    <svg class="bi text-danger" width="32" height="32" fill="blue"
                                        style="width:10px">
                                        <use
                                            xlink:href="{{asset('dashboard/')}}/static/images/bootstrap-icons.svg#circle-fill" />
                                    </svg>
                                    <h5 class="mb-0 ms-3">Indonesia</h5>
                                </div>
                            </div>
                            <div class="col-5">
                                <h5 class="mb-0 text-end">1025</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-indonesia"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Comments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img src="{{asset('dashboard/')}}/compiled/jpg/5.jpg">
                                                </div>
                                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">Congratulations on your graduation!</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img src="{{asset('dashboard/')}}/compiled/jpg/2.jpg">
                                                </div>
                                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                            </div>
                                        </td>
                                        <td class="col-auto">
                                            <p class=" mb-0">Wow amazing design! Can you make another tutorial for
                                                this design?</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3">
        <div class="card">
            <div class="card-body py-4 px-4">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                        <img src="{{asset('dashboard/')}}/compiled/jpg/1.jpg" alt="Face 1">
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">John Duck</h5>
                        <h6 class="text-muted mb-0">@johnducky</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Recent Messages</h4>
            </div>
            <div class="card-content pb-4">
                <div class="recent-message d-flex px-4 py-3">
                    <div class="avatar avatar-lg">
                        <img src="{{asset('dashboard/')}}/compiled/jpg/4.jpg">
                    </div>
                    <div class="name ms-4">
                        <h5 class="mb-1">Hank Schrader</h5>
                        <h6 class="text-muted mb-0">@johnducky</h6>
                    </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                    <div class="avatar avatar-lg">
                        <img src="{{asset('dashboard/')}}/compiled/jpg/5.jpg">
                    </div>
                    <div class="name ms-4">
                        <h5 class="mb-1">Dean Winchester</h5>
                        <h6 class="text-muted mb-0">@imdean</h6>
                    </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                    <div class="avatar avatar-lg">
                        <img src="{{asset('dashboard/')}}/compiled/jpg/1.jpg">
                    </div>
                    <div class="name ms-4">
                        <h5 class="mb-1">John Dodol</h5>
                        <h6 class="text-muted mb-0">@dodoljohn</h6>
                    </div>
                </div>
                <div class="px-4">
                    <button class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Start Conversation</button>
                </div>
            </div>
        </div> 
        <div class="card">
            <div class="card-header">
                <h4>Visitors Profile</h4>
            </div>
            <div class="card-body">
                <div id="chart-visitors-profile"></div>
            </div>
        </div>
    </div>
</section>
@endsection