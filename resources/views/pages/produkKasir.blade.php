@extends('layouts.kasirMaster')

@section('title', 'Product')
@section('title-2', 'Product')

@section('content')
    <section class="container mb-5" id="drink">
        <p class="text-start fs-2">Drink's Menu</p>
        <div id="slider1" class="row splide">
            <div class="splide__track">
                <div class="splide__list" style="display: flex; justify-content: center;">
                    @foreach ($produkDrink as $produk)
                        <!-- card start -->
                        <div class="col-sm-4 splide__slide m-2" style="flex-shrink: 0;">
                            <div class="card bg-body-secondary text-black card-post">
                                <img src="{{ route('gambarMenu', $produk->foto_menu) }}" width="250" height="250"
                                    class="card-img-fluid rounded mx-auto d-block mt-2">
                                <div id="{{ $produk->id }}" class="card-body">
                                    <h5 class="card-title" data-target="nama_menu">{{ $produk->nama_menu }}</h5>
                                    <p class="card-text" data-target="keterangan">{{ $produk->keterangan }}</p>
                                    <p class="card-text mb-0">Stok : </p>
                                    <p class="card-text" data-target="jml_stok">{{ $produk->jml_stok }}</p>
                                    <br>
                                    <button class="btn btn-success" data-id="{{ $produk->id }}">Tambahkan</button>
                                    <small class="text-muted float-end"
                                        data-target="last_update">{{ $produk->last_update }}</small>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="container mb-5">
        <p class="text-start fs-2">Food's Menu</p>
        <div id="slider2" class="row splide">
            <div class="splide__track">
                <div class="splide__list" style="display: flex; justify-content: center;">
                    @foreach ($produkFood as $produk)
                        <!-- card start -->
                        <div class="col-sm-4 splide__slide m-2" style="flex-shrink: 0;">
                            <div class="card bg-body-secondary text-black card-post">
                                <img src="{{ route('gambarMenu', $produk->foto_menu) }}" width="250" height="250"
                                    class="card-img-fluid rounded mx-auto d-block mt-2">
                                <div id="{{ $produk->id }}" class="card-body">
                                    <h5 class="card-title" data-target="nama_menu">{{ $produk->nama_menu }}</h5>
                                    <p class="card-text" data-target="keterangan">{{ $produk->keterangan }}</p>
                                    <p class="card-text mb-0">Stok : </p>
                                    <p class="card-text" data-target="jml_stok">{{ $produk->jml_stok }}</p>
                                    <br>
                                    <button class="btn btn-success" data-id="{{ $produk->id }}">Tambahkan</button>
                                    <small class="text-muted float-end"
                                        data-target="last_update">{{ $produk->last_update }}</small>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript"></script>
@endsection
