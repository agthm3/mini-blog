@extends('layouts.app')

@section('header')
    <div class="container">
        <div class="page-banner">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-md-6">
                    <nav aria-label="Breadcrumb">
                        <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Kontak
                            </li>
                        </ul>
                    </nav>
                    <h1 class="text-center">Kontak Saya</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="page-section">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-lg-4 py-3">
                    <div class="display-4 text-center text-primary">
                        <span class="inbox"></span>
                        <i class="fa fa-solid fa-envelope"></i>
                    </div>
                    <p class="mb-3 font-weight-medium text-lg">Email</p>
                    <p class="mb-0 text-secondary">
                        Email dengan subject "Permintaan Kerjasama" ke email
                        gigam57@gmail.com
                    </p>
                    <a href="about.html" class="btn btn-primary mt-3">Link Email</a>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="display-4 text-center text-primary">
                        <i class="fa fa-brands fa-linkedin"></i>
                    </div>
                    <p class="mb-3 font-weight-medium text-lg">Linkedin</p>
                    <p class="mb-0 text-secondary">
                        Lihat lebih banyak, mulai dari rekam jejak
                        organisasi hingga pekerjaan
                    </p>
                    <a href="about.html" class="btn btn-primary mt-3">Link LinkedIn</a>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="display-4 text-center text-primary">
                        <i class="fa fa-brands fa-youtube"></i>
                    </div>
                    <p class="mb-3 font-weight-medium text-lg">Youtube</p>
                    <p class="mb-0 text-secondary">
                        Terkadang saya membuat beberapa video mengenai
                        pemikiran, pengalaman dan dokumenter dari kegiatan
                        yang saya ikuti
                    </p>
                    <a href="about.html" class="btn btn-primary mt-3">Live Youtube</a>
                </div>
            </div>
        </div>
    </div>
@endsection
