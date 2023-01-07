@extends('layouts.dashboard')

@section('header')
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100 mb-4 d-flex">
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                        xml:space="preserve">
                        <g>
                            <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                            <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                            <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                        </g>
                    </svg>
                </a>
            </div>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item dropdown">
                    <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="nav-link">
                        <i class="fa fa-home fe-16"></i>
                        <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
            <!-- Menu -->
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Components</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item w-100">
                    <a class="nav-link" href="{{ route('blog.index') }}">
                        <i class="fa fa-newspaper fe-16"></i>
                        <span class="ml-3 item-text">Blog</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link" href="dashboard-portofolio-index.html">
                        <i class="fa fa-tasks    fe-16"></i>
                        <span class="ml-3 item-text">Portofolio</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link" href="dashboard-kontak-index.html">
                        <i class="fa fa-calendar fe-16"></i>
                        <span class="ml-3 item-text">Kontak</span>
                    </a>
                </li>

                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Apps</span>
                </p>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="./profile-settings.html" data-toggle="collapse" aria-expanded="false"
                            class="nav-link pl-3">
                            <i class="fa fa-user fe-16"></i>
                            <span class="ml-3 item-text">Profile</span>
                        </a>
                    </li>
                    <div class="btn-box w-100 mt-4 mb-1">
                        <a href="https://themeforest.net/item/tinydash-bootstrap-html-admin-dashboard-template/27511269"
                            target="_blank" class="btn mb-2 btn-primary btn-lg btn-block">
                            <i class="fa fa-sign-out fe-12 mx-2"></i><span class="small">Log Out</span>
                        </a>
                    </div>
        </nav>
    </aside>
@endsection
@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <div class="col">
                            <h2 class="h5 page-title">
                                Halo Andi Gigatera Halil M.!
                            </h2>
                        </div>
                        <div class="col-auto">
                            <form class="form-inline">
                                <div class="form-group d-none d-lg-inline">
                                    <label for="reportrange" class="sr-only">Date Ranges</label>
                                    <div id="reportrange" class="px-2 py-2 text-muted">
                                        <span class="small"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm">
                                        <span class="fe fe-refresh-ccw fe-16 text-muted"></span>
                                    </button>
                                    <button type="button" class="btn btn-sm mr-2">
                                        <span class="fe fe-filter fe-16 text-muted"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Recent Activity -->
                        <div class="col-md-12 col-lg-4 mb-4">
                            <div class="card shadow">
                                <div class="card-header">
                                    <strong class="card-title float-left">Komentar Terbaru</strong>
                                    <a class="float-right small text-muted" href="#!">View all</a>
                                </div>
                                <div class="card-body">
                                    <div class="list-group list-group-flush my-n3">
                                        <div class="list-group-item">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-sm mt-2">
                                                        <img src="./assets/avatars/face-1.jpg" alt="..."
                                                            class="avatar-img rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <small><strong>Brown,
                                                            Asher</strong></small>
                                                    <div class="my-0 text-muted small">
                                                        Just create new
                                                        layout Index,
                                                        form, table
                                                    </div>
                                                    <small class="badge badge-light text-muted">1h ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-sm mt-2">
                                                        <img src="./assets/avatars/face-2.jpg" alt="..."
                                                            class="avatar-img rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <small><strong>Hester,
                                                            Nissim</strong></small>
                                                    <div class="my-0 text-muted small">
                                                        Fusce dapibus,
                                                        tellus ac cursus
                                                        commodo
                                                    </div>
                                                    <small class="badge badge-light text-muted">2h ago</small>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </div>
                                        <div class="list-group-item">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-sm mt-2">
                                                        <img src="./assets/avatars/face-3.jpg" alt="..."
                                                            class="avatar-img rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <small><strong>Kelley,
                                                            Sonya</strong></small>
                                                    <div class="my-0 text-muted small">
                                                        Created new
                                                        layout for
                                                        widgets
                                                    </div>
                                                    <small class="badge badge-light text-muted">4h ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                    <!-- / .list-group -->
                                </div>
                                <!-- / .card-body -->
                            </div>
                            <!-- / .card -->
                        </div>
                        <!-- / .col-md-6 -->
                        <!-- Striped rows -->
                        <div class="col-md-12 col-lg-8 mb-2">
                            <div class="card shadow">
                                <div class="card-header">
                                    <strong class="card-title">Artikel Terbaru</strong>
                                    <a class="float-right small text-muted" href="#!">View all</a>
                                </div>
                                <div class="card-body my-n2">
                                    <table class="table table-striped table-hover table-borderless">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Judul</th>
                                                <th>Article</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2474</td>
                                                <th scope="col">
                                                    Brown, Asher D.
                                                </th>
                                                <td id="articlepreview">
                                                    What is Lorem Ipsum?
                                                    Lorem Ipsum is
                                                    simply dummy text of
                                                    the printing and
                                                    typesetting
                                                    industry. Lorem
                                                    Ipsum has been the
                                                    industry's standard
                                                    dummy text ever
                                                    since the 1500s,
                                                    when an unknown
                                                    printer took a
                                                    galley of type and
                                                    scrambled it to make
                                                    a type specimen
                                                    book. It has
                                                    survived not only
                                                    five centuries, but
                                                    also the leap into
                                                    electronic
                                                    typesetting,
                                                    remaining
                                                    essentially
                                                    unchanged. It was
                                                    popularised in the
                                                    1960s with the
                                                    release of Letraset
                                                    sheets containing
                                                    Lorem Ipsum
                                                    passages, and more
                                                    recently with
                                                    desktop publishing
                                                    software like Aldus
                                                    PageMaker including
                                                    versions of Lorem
                                                    Ipsum. Why do we use
                                                    it? It is a long
                                                    established fact
                                                    that a reader will
                                                    be distracted by the
                                                    readable content of
                                                    a page when looking
                                                    at its layout. The
                                                    point of using Lorem
                                                    Ipsum is that it has
                                                    a more-or-less
                                                    normal distribution
                                                    of letters, as
                                                    opposed to using
                                                    'Content here,
                                                    content here',
                                                    making it look like
                                                    readable English.
                                                    Many desktop
                                                    publishing packages
                                                    and web page editors
                                                    now use Lorem Ipsum
                                                    as their default
                                                    model text, and a
                                                    search for 'lorem
                                                    ipsum' will uncover
                                                    many web sites still
                                                    in their infancy.
                                                    Various versions
                                                    have evolved over
                                                    the years, sometimes
                                                    by accident,
                                                    sometimes on purpose
                                                    (injected humour and
                                                    the like). Where
                                                    does it come from?
                                                    Contrary to popular
                                                    belief, Lorem Ipsum
                                                    is not simply random
                                                    text. It has roots
                                                    in a piece of
                                                    classical Latin
                                                    literature from 45
                                                    BC, making it over
                                                    2000 years old.
                                                    Richard McClintock,
                                                    a Latin professor at
                                                    Hampden-Sydney
                                                    College in Virginia,
                                                    looked up one of the
                                                    more obscure Latin
                                                    words, consectetur,
                                                    from a Lorem Ipsum
                                                    passage, and going
                                                    through the cites of
                                                    the word in
                                                    classical
                                                    literature,
                                                    discovered the
                                                    undoubtable source.
                                                    Lorem Ipsum comes
                                                    from sections
                                                    1.10.32 and 1.10.33
                                                    of "de Finibus
                                                    Bonorum et Malorum"
                                                    (The Extremes of
                                                    Good and Evil) by
                                                    Cicero, written in
                                                    45 BC. This book is
                                                    a treatise on the
                                                    theory of ethics,
                                                    very popular during
                                                    the Renaissance. The
                                                    first line of Lorem
                                                    Ipsum, "Lorem ipsum
                                                    dolor sit amet..",
                                                    comes from a line in
                                                    section 1.10.32. The
                                                    standard chunk of
                                                    Lorem Ipsum used
                                                    since the 1500s is
                                                    reproduced below for
                                                    those interested.
                                                    Sections 1.10.32 and
                                                    1.10.33 from "de
                                                    Finibus Bonorum et
                                                    Malorum" by Cicero
                                                    are also reproduced
                                                    in their exact
                                                    original form,
                                                    accompanied by
                                                    English versions
                                                    from the 1914
                                                    translation by H.
                                                    Rackham. Where can I
                                                    get some? There are
                                                    many variations of
                                                    passages of Lorem
                                                    Ipsum available, but
                                                    the majority have
                                                    suffered alteration
                                                    in some form, by
                                                    injected humour, or
                                                    randomised words
                                                    which don't look
                                                    even slightly
                                                    believable. If you
                                                    are going to use a
                                                    passage of Lorem
                                                    Ipsum, you need to
                                                    be sure there isn't
                                                    anything
                                                    embarrassing hidden
                                                    in the middle of
                                                    text. All the Lorem
                                                    Ipsum generators on
                                                    the Internet tend to
                                                    repeat predefined
                                                    chunks as necessary,
                                                    making this the
                                                    first true generator
                                                    on the Internet. It
                                                    uses a dictionary of
                                                    over 200 Latin
                                                    words, combined with
                                                    a handful of model
                                                    sentence structures,
                                                    to generate Lorem
                                                    Ipsum which looks
                                                    reasonable. The
                                                    generated Lorem
                                                    Ipsum is therefore
                                                    always free from
                                                    repetition, injected
                                                    humour, or
                                                    non-characteristic
                                                    words etc.
                                                </td>
                                                <td>13/09/2020</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm dropdown-toggle more-vertical"
                                                            type="button" id="dr1" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted sr-only">Action</span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dr1">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                            <a class="dropdown-item" href="#">Show</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Striped rows -->
                    </div>

                    <!-- Portofolio -->
                    <div class="row">
                        <div class="col-md-12 col-lg-12 mb-2">
                            <div class="card shadow">
                                <div class="card-header">
                                    <strong class="card-title">Portofolio Terbaru</strong>
                                    <a class="float-right small text-muted" href="#!">View all</a>
                                </div>
                                <div class="card-body my-n2">
                                    <table class="table table-striped table-hover table-borderless">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Judul</th>
                                                <th>Detail</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2474</td>
                                                <th scope="col">
                                                    Brown, Asher D.
                                                </th>
                                                <td>
                                                    Ap #331-7123
                                                    Lobortis Avenue
                                                </td>
                                                <td>13/09/2020</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm dropdown-toggle more-vertical"
                                                            type="button" id="dr1" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <span class="text-muted sr-only">Action</span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dr1">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Hapus</a>
                                                            <a class="dropdown-item" href="#">Show</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- .col-12 -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container-fluid -->
        <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog"
            aria-labelledby="defaultModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">
                            Notifications
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-box fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Package has uploaded
                                                successfull</strong></small>
                                        <div class="my-0 text-muted small">
                                            Package is zipped and
                                            uploaded
                                        </div>
                                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-download fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Widgets are updated
                                                successfull</strong></small>
                                        <div class="my-0 text-muted small">
                                            Just create new layout
                                            Index, form, table
                                        </div>
                                        <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-inbox fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Notifications have been
                                                sent</strong></small>
                                        <div class="my-0 text-muted small">
                                            Fusce dapibus, tellus ac
                                            cursus commodo
                                        </div>
                                        <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-link fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Link was attached to
                                                menu</strong></small>
                                        <div class="my-0 text-muted small">
                                            New layout has been attached
                                            to the menu
                                        </div>
                                        <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                    </div>
                                </div>
                            </div>
                            <!-- / .row -->
                        </div>
                        <!-- / .list-group -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">
                            Clear All
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog"
            aria-labelledby="defaultModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">
                            Shortcuts
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body px-5">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-success justify-content-center">
                                    <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Control area</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Activity</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Droplet</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Upload</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-users fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Users</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Settings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
