@extends('layouts.app')


@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <nav aria-label="Breadcrumb">
                <ul class="breadcrumb p-0 mb-0 bg-transparent">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="blog.html">Portofolio Detail</a>
                    </li>
                    <li class="breadcrumb-item active">
                        {{ $data->title }}
                    </li>
                </ul>
            </nav>

            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-single-wrap">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="../assets/img/blog/blog-1.jpg" alt="" />
                            </div>
                            <div class="meta-header">
                                <div class="post-author">
                                    <div class="avatar">
                                        <img src="../assets/img/person/person_1.jpg" alt="" />
                                    </div>
                                    Oleh
                                    <a href="#">Andi Gigatera Halil M.</a>
                                </div>
                            </div>
                        </div>
                        <h1 class="post-title">
                            {{ $data->title }}
                        </h1>

                        <div class="post-content">
                            <p>
                                {{ $data->article }}
                            </p>

                        </div>
                        <a href="{{ $data->preview_url }}" class="btn btn-primary mt-3"><i class="fa fas fa-globe"></i> Live
                            Preview</a>
                        <a href="{{ $data->github_url }}" class="btn btn-primary mt-3"><i
                                class="fa fa-brands fa-github"></i>
                            Github
                            Code</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <!-- Widget Categories -->
                        <!-- <div class="widget-box">
                                                                    <h4 class="widget-title">Client</h4>
                                                                    <div class="divider"></div>

                                                                    <ul class="categories">
                                                                        <li><a href="#">LifeStyle</a></li>
                                                                        <li><a href="#">Food</a></li>
                                                                        <li><a href="#">Healthy</a></li>
                                                                        <li><a href="#">Sports</a></li>
                                                                        <li><a href="#">Entertainment</a></li>
                                                                    </ul>
                                                                </div> -->

                        <!-- Widget recent post -->
                        <!-- <div class="widget-box">
                                                                    <h4 class="widget-title">Artikel Terbaru</h4>
                                                                    <div class="divider"></div>

                                                                    <div class="blog-item">
                                                                        <a class="post-thumb" href="">
                                                                            <img
                                                                                src="../assets/img/blog/blog-1.jpg"
                                                                                alt=""
                                                                            />
                                                                        </a>
                                                                        <div class="content">
                                                                            <h6 class="post-title">
                                                                                <a href="#"
                                                                                    >Even the all-powerful Pointing
                                                                                    has no control</a
                                                                                >
                                                                            </h6>
                                                                            <div class="meta">
                                                                                <a href="#"
                                                                                    ><span
                                                                                        class="mai-calendar"
                                                                                    ></span>
                                                                                    July 12, 2018</a
                                                                                >
                                                                                <a href="#"
                                                                                    ><span
                                                                                        class="mai-person"
                                                                                    ></span>
                                                                                    Admin</a
                                                                                >
                                                                                <a href="#"
                                                                                    ><span
                                                                                        class="mai-chatbubbles"
                                                                                    ></span>
                                                                                    19</a
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="blog-item">
                                                                        <a class="post-thumb" href="">
                                                                            <img
                                                                                src="../assets/img/blog/blog-2.jpg"
                                                                                alt=""
                                                                            />
                                                                        </a>
                                                                        <div class="content">
                                                                            <h6 class="post-title">
                                                                                <a href="#"
                                                                                    >Even the all-powerful Pointing
                                                                                    has no control</a
                                                                                >
                                                                            </h6>
                                                                            <div class="meta">
                                                                                <a href="#"
                                                                                    ><span
                                                                                        class="mai-calendar"
                                                                                    ></span>
                                                                                    July 12, 2018</a
                                                                                >
                                                                                <a href="#"
                                                                                    ><span
                                                                                        class="mai-person"
                                                                                    ></span>
                                                                                    Admin</a
                                                                                >
                                                                                <a href="#"
                                                                                    ><span
                                                                                        class="mai-chatbubbles"
                                                                                    ></span>
                                                                                    19</a
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="blog-item">
                                                                        <a class="post-thumb" href="">
                                                                            <img
                                                                                src="../assets/img/blog/blog-3.jpg"
                                                                                alt=""
                                                                            />
                                                                        </a>
                                                                        <div class="content">
                                                                            <h6 class="post-title">
                                                                                <a href="#"
                                                                                    >Even the all-powerful Pointing
                                                                                    has no control</a
                                                                                >
                                                                            </h6>
                                                                            <div class="meta">
                                                                                <a href="#"
                                                                                    ><span
                                                                                        class="mai-calendar"
                                                                                    ></span>
                                                                                    July 12, 2018</a
                                                                                >
                                                                                <a href="#"
                                                                                    ><span
                                                                                        class="mai-person"
                                                                                    ></span>
                                                                                    Admin</a
                                                                                >
                                                                                <a href="#"
                                                                                    ><span
                                                                                        class="mai-chatbubbles"
                                                                                    ></span>
                                                                                    19</a
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
