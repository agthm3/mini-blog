@extends('layouts.app')
@section('header')
    <div class="page-section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <!-- <span class="subhead">About us</span>
                                                                                                                                                                                                    <h2 class="title-section">
                                                                                                                                                                                                        The number #1 SEO Service Company
                                                                                                                                                                                                    </h2> -->
                    <div class="divider"></div>

                    <p>
                        Selamat datang di blog personal saya,
                        perkenalkan namaku Andi Gigatera Halil M!
                        Seorang Mahasiswa Tingkat 7 di Universitas
                        Hasanuddin Jurusan Teknik Informatika.Saya
                        adalah seorang Fullstack Website Developer
                        (PHP/Laravel), Blogger, dan seseorang yang aktif
                        dalam kegiatan organisasi formal dan non-formal.
                    </p>
                    <p>
                        Website ini berisi tentang segala tentang Giga,
                        Pemikiran, Pengalaman, Portofolio dan kontak
                        yang dapat kamu akses.
                    </p>
                    <a href="{{ route('index.blog') }}" class="btn btn-primary mt-3">Masuk Ke Blog</a>
                </div>
                <div class="col-lg-6 py-3 wow fadeInRight">
                    <div class="img-fluid py-3 text-center">
                        <img src="../assets/img/about_me.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- .container -->
    </div>
@endsection
@section('content')
    <div class="page-section" style="margin-top: -150px">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="subhead">Artikel Terbaru</div>
                <h2 class="title-section">Baca artikel terbaru</h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row my-5">
                @foreach ($data as $item)
                    <div class="col-lg-4 py-3">
                        <div class="card-blog">
                            <div class="header">
                                <div class="post-thumb">
                                    <img src="../assets/img/blog/blog-1.jpg" alt="" />
                                </div>
                            </div>
                            <div class="body">
                                <h5 class="post-title">
                                    <a href="{{ route('show.blog', ['id' => $item->id]) }}">{{ $item->title }}</a>
                                </h5>
                                <div class="post-date">
                                    Diposting Pada <a href="#">{{ $item->created_at->format('d-m-Y') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="col-lg-4 py-3">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="../assets/img/blog/blog-2.jpg" alt="" />
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title">
                                <a href="blog-details.html">Source of Content Inspiration</a>
                            </h5>
                            <div class="post-date">
                                Posted on <a href="#">27 Jan 2020</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 py-3">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-thumb">
                                <img src="../assets/img/blog/blog-3.jpg" alt="" />
                            </div>
                        </div>
                        <div class="body">
                            <h5 class="post-title">
                                <a href="blog-details.html">Source of Content Inspiration</a>
                            </h5>
                            <div class="post-date">
                                Posted on <a href="#">27 Jan 2020</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- .container -->
    </div>
    <div class="page-section" style="margin-top: -150px">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="subhead">Portoflio Terbaru</div>
                <h2 class="title-section">Lihat portofolio terbaru</h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row my-3">
                @foreach ($porto as $item)
                    <div class="col-lg-4 py-3">
                        <div class="card-blog">
                            <div class="header">
                                <div class="post-thumb">
                                    <img src="../assets/img/blog/blog-1.jpg" alt="" />
                                </div>
                            </div>
                            <div class="body">
                                <h5 class="post-title">
                                    <a href="portofolio-details.html">{{ $item->title }}</a>
                                </h5>
                                <div class="post-date">
                                    Diposting pada <a href="#">{{ $item->created_at->format('d-m-Y') }}</a>
                                </div>
                                <a href="about.html" class="btn btn-primary mt-3">Live Preview</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <hr />
        <!-- .container -->
    </div>
@endsection
