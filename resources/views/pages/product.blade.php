@extends('layouts.master')

@section('title', 'Product')
@section('title-2', 'Product')

@section('content')
    <section class="container mt-5" id="drink">
        <p class="text-start fs-2">Drink's Menu</p>
        <div id="slider1" class="row splide">
            <div class="splide__track">
                <div class="splide__list">
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 1</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                            <div class="optional-menu">

                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 2</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 3</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 4</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 5</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 6</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 7</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 8</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-5">
        <p class="text-start fs-2">Food's Menu</p>
        <div id="slider2" class="row splide">
            <div class="splide__track">
                <div class="splide__list">
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 1</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                            <div class="optional-menu">

                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 2</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 3</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 4</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 5</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 6</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 7</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <!-- card start -->
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-body-secondary text-black card-post">
                            <img src="{{ asset('dist/img/kopicokelat.jpg') }}" width="250" height="250"
                                class="card-img-fluid rounded mx-auto d-block mt-2">
                            <div class="card-body">
                                <h5 class="card-title">Card Slider 8</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to
                                    additional content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                </div>
            </div>
        </div>
    </section>
@endsection
