@extends('layouts.adminMaster')

@section('title', 'Data Kasir')
@section('title-2', 'Data Kasir')

@section('content')

    @php
        $number = 0;
    @endphp

    <div class="container-m mt-5 vh-100">
        <button type="button" class="btn btn-sm btn-primary float-end mb-2" data-bs-toggle="modal"
            data-bs-target="#addKasirData">Daftarkan Kasir</button>
        <table class="table table-hover table-sm" id="kasir_table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @if ($kasirData->count())
                    @foreach ($kasirData as $kasir)
                        @php
                            $number++;
                        @endphp

                        <tr id="{{ $kasir->id }}">
                            <th scope="row">{{ $number }}</th>
                            <td data-target="name">{{ $kasir->name }}</td>
                            <td data-target="email">{{ $kasir->email }}</td>
                            <td data-target="created_at">{{ $kasir->created_at }}</td>
                            <td data-target="updated_at">{{ $kasir->updated_at }}</td>
                            <td><button type="button" class="btn btn-success" data-id="{{ $kasir->id }}"
                                    data-role="updateKasirData">Update</button>
                                <button type="button" class="btn btn-warning" data-id="{{ $kasir->id }}"
                                    data-role="deleteKasirData">Delete</button>
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
        <div class="modal fade" id="addKasirData" tabindex="-1" role="dialog" aria-labelledby="addKasirDataTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addKasirDataLongTitle">Tambah Stok Data</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('tambahKasir') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Kasir</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama Kasir" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Kasir</label>
                                <input type="email" class="form-control" name="email" placeholder="Email Kasir"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password Kasir</label>
                                <input type="password" class="form-control" name="password" placeholder="Password Kasir">
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Konfirmasi Password Kasir</label>
                                <input type="password" class="form-control" name="confirm_password"
                                    placeholder="Konfirmasi Password Kasir">
                            </div>
                            <div class="form-group">
                                <label for="created_at">Tanggal Masuk</label>
                                <input type="date" class="form-control" name="created_at" placeholder="Tanggal Masuk"
                                    format="yyyy-mm-dd" required>
                            </div>
                            <div class="form-group" hidden>
                                <label for="updated_at">Last Update</label>
                                <input type="date" class="form-control lastUpdate" name="updated_at"
                                    value="<?= date('Y-m-d') ?>" format="yyyy-mm-dd"
                                    style="opacity: 0.5;background-color: #eee;cursor: not-allowed;" disabled>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Daftarkan">
                        </div>
                    </form>

                </div>
            </div>
        </div>

        {{-- Modal Untuk Update Data --}}
        <div class="modal fade" id="updateKasirData" tabindex="-1" role="dialog" aria-labelledby="updateStokDataTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateStokDataLongTitle">Update Stok Data</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('updateKasir') }}" method="POST">
                        <div class="modal-body">
                            @csrf
                            <!-- di hidden karena ga perlu -->
                            <div class="form-group" hidden>
                                <label for="id">Id</label>
                                <input type="text" id="id" name="id" class="form-control" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nama">Nama Kasir</label>
                                <input type="text" class="form-control" name="nama" id="name" placeholder="Nama Kasir" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Kasir</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Kasir"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password Kasir</label>
                                <input type="password" class="form-control" name="password" placeholder="Password Kasir">
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Konfirmasi Password Kasir</label>
                                <input type="password" class="form-control" name="confirm_password"
                                    placeholder="Konfirmasi Password Kasir">
                            </div>
                            <div class="form-group" hidden>
                                <label for="updated_at">Last Update</label>
                                <input type="date" class="form-control lastUpdate" name="updated_at"
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
    </div>
@endsection
