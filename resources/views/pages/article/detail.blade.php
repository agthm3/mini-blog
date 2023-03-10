@extends('layouts.app')

@section('header')
@endsection


@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <nav aria-label="Breadcrumb">
                <ul class="breadcrumb p-0 mb-0 bg-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('index.blog') }}">Blog</a>
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
                                    <a href="#">{{ $data->user->name }}</a>
                                </div>
                            </div>
                        </div>
                        <h1 class="post-title">
                            {{ $data->title }}
                        </h1>
                        <h6 class="post-title">{{ $data->sub_title }}</h6>
                        <div class="post-meta">
                            <div class="post-date">
                                <span class="icon">
                                    <span class="mai-time-outline"></span>
                                </span>
                                <a href="#">{{ $data->created_at->format('d-M-Y') }}</a>
                            </div>
                            <div class="post-comment-count ml-2">
                                <span class="icon">
                                    <span class="mai-chatbubbles-outline"></span>
                                </span>
                                <a href="#">4 Comments</a>
                            </div>
                        </div>
                        <div class="post-content">
                            {{ $data->article }}
                        </div>
                    </div>

                    <div class="comment-form-wrap pt-5">
                        <h2 class="mb-5">Leave a comment</h2>
                        <form action="#" class="">
                            <div class="form-row form-group">
                                <div class="col-md-6">
                                    <label for="name">Name *</label>
                                    <input type="text" class="form-control" id="name" />
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <!-- Widget Categories -->
                        <div class="widget-box">
                            <h4 class="widget-title">Kategori</h4>
                            <div class="divider"></div>

                            <ul class="categories">
                                <li><a href="#">LifeStyle</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Healthy</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Entertainment</a></li>
                            </ul>
                        </div>

                        <!-- Widget recent post -->
                        <div class="widget-box">
                            <h4 class="widget-title">Artikel Terbaru</h4>
                            <div class="divider"></div>

                            @foreach ($article as $item)
                                <div class="blog-item">
                                    <a class="post-thumb" href="">
                                        <img src="../assets/img/blog/blog-1.jpg" alt="" />
                                    </a>
                                    <div class="content">
                                        <h6 class="post-title">
                                            <a href="#">{{ $item->title }}</a>
                                        </h6>
                                        <div class="meta">
                                            <a href="#"><span class="mai-calendar"></span>
                                                {{ $item->created_at->format('d-M-Y') }}</a>
                                            <a href="#"><span class="mai-person"></span>
                                                {{ $item->user->name }}</a>
                                            <a href="#"><span class="mai-chatbubbles"></span>
                                                19</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
