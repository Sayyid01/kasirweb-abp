@extends('layouts.adminMaster')

@section('title', 'Stok')
@section('title-2', 'Stok')

@section('content')

    @php
        $number = 0;
    @endphp

    <div class="container-m mt-5 vh-100">
        <button type="button" class="btn btn-sm btn-primary float-end mb-2" data-bs-toggle="modal"
            data-bs-target="#addStokData">Add Item</button>
        <table class="table table-hover table-sm" id="stok_table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Stok Tersedia</th>
                    <th scope="col">Expired</th>
                    <th scope="col">Last Update</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @if ($stok->count())


                    @foreach ($stok as $stok)
                        @php
                            $number++;
                        @endphp

                        <tr id="{{ $stok->id }}">
                            <th scope="row">{{ $number }}</th>
                            <td data-target="nama_barang">{{ $stok->nama_barang }}</td>
                            <td data-target="jml_stok">{{ $stok->jml_stok }} KG</td>
                            <td data-target="expired">{{ $stok->expired }}</td>
                            <td data-target="last_update">{{ $stok->last_update }}</td>
                            <td><button type="button" class="btn btn-success" data-id="{{ $stok->id }}"
                                    data-role="updateStokData">Update</button>
                                <button type="button" class="btn btn-warning" data-id="{{ $stok->id }}"
                                    data-role="deleteStokData">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>No Data</td>
                    </tr>
                @endif
            </tbody>
        </table>

        {{-- Modal Untuk Tambah Data --}}
        <div class="modal fade" id="addStokData" tabindex="-1" role="dialog" aria-labelledby="addStokDataTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addStokDataLongTitle">Tambah Stok Data</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('tambahStok') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="jml_stok">Jumlah Barang/KG</label>
                                <input type="number" step="0.01" class="form-control" name="jml_stok"
                                    placeholder="Jumlah Barang" required>
                            </div>
                            <div class="form-group">
                                <label for="expired">Tanggal Expired</label>
                                <input type="date" class="form-control" name="expired" placeholder="Tanggal Expired"
                                    format="yyyy-mm-dd" required>
                            </div>
                            <div class="form-group">
                                <label for="last_update">Last Update</label>
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
        <div class="modal fade" id="updateStokData" tabindex="-1" role="dialog" aria-labelledby="updateStokDataTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateStokDataLongTitle">Update Stok Data</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('updateStok') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <!-- di hidden karena ga perlu -->
                            <div class="form-group" hidden>
                                <label for="id">Id Barang</label>
                                <input type="text" id="id" name="id" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" id="nama_barang"
                                    placeholder="Nama Barang" required>
                            </div>
                            <div class="form-group">
                                <label for="jml_stok">Jumlah Barang/KG</label>
                                <input type="number" step="0.01" class="form-control" name="jml_stok"
                                    id="jml_stok" placeholder="Jumlah Barang" required>
                            </div>
                            <div class="form-group">
                                <label for="expired">Tanggal Expired</label>
                                <input type="date" class="form-control" name="expired" id="expired"
                                    placeholder="Tanggal Expired" required>
                            </div>
                            <div class="form-group">
                                <label for="last_update">Last Update</label>
                                <input type="date" id="last_update" class="form-control lastUpdate" name="last_update"
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
    </div>
@endsection
