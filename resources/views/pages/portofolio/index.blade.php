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
                                Portofolio
                            </li>
                        </ul>
                    </nav>
                    <h1 class="text-center">Portofolio</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="page-section">
        <div class="container">
            <!-- <div class="row">
                                        <div class="col-sm-10">
                                            <form action="#" class="form-search-blog">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <select
                                                            id="categories"
                                                            class="custom-select bg-light"
                                                        >
                                                            <option>All Categories</option>
                                                            <option value="travel">Travel</option>
                                                            <option value="lifestyle">
                                                                LifeStyle
                                                            </option>
                                                            <option value="healthy">Healthy</option>
                                                            <option value="food">Food</option>
                                                        </select>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        placeholder="Enter keyword.."
                                                    />
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-2 text-sm-right">
                                            <button class="btn btn-secondary">
                                                Filter <span class="mai-filter"></span>
                                            </button>
                                        </div>
                                    </div> -->

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
                                    <a href="blog-details.html">{{ $item->title }}</a>
                                </h5>
                                <div class="post-date">
                                    Posted on <a href="#">{{ $item->created_at }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

            <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
