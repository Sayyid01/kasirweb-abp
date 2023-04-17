@extends('layouts.adminMaster')

@section('title', 'Product')
@section('title-2', 'Product')

@section('content')
    <section class="container mb-5" id="drink">
        <p class="text-start fs-2">Drink's Menu</p>
        <button type="button" class="btn btn-sm btn-primary float mb-2" data-bs-toggle="modal"
            data-bs-target="#addMenuDrinkData">Add Item</button>
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
                                    <button class="btn btn-success" data-id="{{ $produk->id }}"
                                        data-role='updateMenuDrinkData'>Update</button>
                                    <button type="button" class="btn btn-warning" data-id="{{ $produk->id }}"
                                        data-role="deleteDrinkItem">Delete</button>
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

        {{-- Modal Untuk Tambah Data --}}
        <div class="modal fade" id="addMenuDrinkData" tabindex="-1" role="dialog" aria-labelledby="addMenuDrinkDataTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMenuDrinkDataLongTitle">Tambah Data Minuman</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('tambahMenuDrink') }}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="nama_menu" class="form-label">Nama Menu</label>
                                <input type="text" class="form-control" name="nama_menu" placeholder="Nama Menu"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" name="keterangan" placeholder="Keterangan" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="jml_stok" class="form-label">Jumlah Stok</label>
                                <input type="number" class="form-control" name="jml_stok" placeholder="Jumlah Stok"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="foto_menu" class="form-label">Upload Gambar</label>
                                <input type="file" class="form-control" name="foto_menu" required>
                            </div>
                            <div class="form-group">
                                <label for="last_update" class="form-label">Last Update</label>
                                <input type="date" class="form-control lastUpdate" name="last_update"
                                    value="<?= date('Y-m-d') ?>" format="yyyy-mm-dd"
                                    style="opacity: 0.5;background-color: #eee;cursor: not-allowed;" disabled>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Tambah Item">
                        </div>
                    </form>

                </div>
            </div>
        </div>

        {{-- Modal Untuk Update Data --}}
        <div class="modal fade" id="updateMenuDrinkData" tabindex="-1" role="dialog"
            aria-labelledby="updateMenuDrinkDataTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateMenuDrinkDataLongTitle">Update Data Minuman</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('updateMenuDrink') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <!-- di hidden karena ga perlu -->
                            <div class="form-group" hidden>
                                <label for="id">Id Item</label>
                                <input type="text" id="id" name="id" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nama_menu" class="form-label">Nama Menu</label>
                                <input type="text" class="form-control" name="nama_menu" id="nama_menu"
                                    placeholder="Nama Menu" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="jml_stok" class="form-label">Jumlah Stok</label>
                                <input type="number" class="form-control" name="jml_stok" id="jml_stok"
                                    placeholder="Jumlah Stok" required>
                            </div>
                            <div class="form-group">
                                <label for="last_update" class="form-label">Last Update</label>
                                <input type="date" class="form-control lastUpdate" name="last_update"
                                    value="<?= date('Y-m-d') ?>" format="yyyy-mm-dd"
                                    style="opacity: 0.5;background-color: #eee;cursor: not-allowed;" disabled>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Update Item">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <section class="container mb-5">
        <p class="text-start fs-2">Food's Menu</p>
        <button type="button" class="btn btn-sm btn-primary float mb-2" data-bs-toggle="modal"
            data-bs-target="#addMenuFoodData">Add Item</button>
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
                                    <button class="btn btn-success" data-id="{{ $produk->id }}"
                                        data-role='updateMenuFoodData'>Update</button>
                                    <button type="button" class="btn btn-warning" data-id="{{ $produk->id }}"
                                        data-role="deleteFoodItem">Delete</button>
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

        {{-- Modal Untuk Tambah Food Data --}}
        <div class="modal fade" id="addMenuFoodData" tabindex="-1" role="dialog"
            aria-labelledby="addMenuFoodDataTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMenuFoodDataLongTitle">Tambah Data Makanan</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('tambahMenuFood') }}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="nama_menu" class="form-label">Nama Menu</label>
                                <input type="text" class="form-control" name="nama_menu" placeholder="Nama Menu"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" name="keterangan" placeholder="Keterangan" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="jml_stok" class="form-label">Jumlah Stok</label>
                                <input type="number" class="form-control" name="jml_stok" placeholder="Jumlah Stok"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="foto_menu" class="form-label">Upload Gambar</label>
                                <input type="file" class="form-control" name="foto_menu" required>
                            </div>
                            <div class="form-group">
                                <label for="last_update" class="form-label">Last Update</label>
                                <input type="date" class="form-control lastUpdate" name="last_update"
                                    value="<?= date('Y-m-d') ?>" format="yyyy-mm-dd"
                                    style="opacity: 0.5;background-color: #eee;cursor: not-allowed;" disabled>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Tambah Item">
                        </div>
                    </form>

                </div>
            </div>
        </div>

        {{-- Modal Untuk Update Food Data --}}
        <div class="modal fade" id="updateMenuFoodData" tabindex="-1" role="dialog"
            aria-labelledby="updateMenuFoodDataTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateMenuFoodDataLongTitle">Update Data Makanan</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('updateMenuFood') }}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <!-- di hidden karena ga perlu -->
                            <div class="form-group" hidden>
                                <label for="id">Id Item</label>
                                <input type="text" id="id_food" name="id" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nama_menu" class="form-label">Nama Menu</label>
                                <input type="text" class="form-control" name="nama_menu" id="nama_menu_food"
                                    placeholder="Nama Menu" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="keterangan_food" placeholder="Keterangan" rows="3"
                                    required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="jml_stok" class="form-label">Jumlah Stok</label>
                                <input type="number" class="form-control" name="jml_stok" id="jml_stok_food"
                                    placeholder="Jumlah Stok" required>
                            </div>
                            <div class="form-group">
                                <label for="last_update" class="form-label">Last Update</label>
                                <input type="date" class="form-control lastUpdate" name="last_update"
                                    value="<?= date('Y-m-d') ?>" format="yyyy-mm-dd"
                                    style="opacity: 0.5;background-color: #eee;cursor: not-allowed;" disabled>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Update Item">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript"></script>
@endsection
