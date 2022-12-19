@extends('layouts.app')

@section('content')
    <div class="page-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_e1pmabgl.json"
                                background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay
                                style="
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                    ">
                            </lottie-player>
                            <p>
                                Maaf halaman anda tidak memiliki link Github
                            </p>
                            <a href="index.html" class="btn btn-primary mt-3"
                                style="
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                    ">Kembali
                                Ke Home</a>
                        </div>

                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
