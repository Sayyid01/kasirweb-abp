@extends('layouts.adminMaster')

@section('title', 'Stock')
@section('title-2', 'Stock')

@section('content')
    <div class="container-m mt-5 vh-100">
        <button type="button" class="btn btn-sm btn-primary float-end mb-2" data-bs-toggle="modal"
            data-bs-target="#exampleModalCenter">Add Item</button>
        <table class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Stock Tersedia</th>
                    <th scope="col">Expired</th>
                    <th scope="col">Last Update</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td>Strawberry Powder</td>
                    <td>1,65 KG</td>
                    <td>21/01/24</td>
                    <td>21/01/24</td>
                    <td><button class="btn btn-success">Update</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Strawberry Powder</td>
                    <td>1,65 KG</td>
                    <td>21/01/24</td>
                    <td>21/01/24</td>
                    <td><button class="btn btn-success">Update</button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Strawberry Powder</td>
                    <td>1,65 KG</td>
                    <td>21/01/24</td>
                    <td>21/01/24</td>
                    <td><button class="btn btn-success">Update</button></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Strawberry Powder</td>
                    <td>1,65 KG</td>
                    <td>21/01/24</td>
                    <td>21/01/24</td>
                    <td><button class="btn btn-success">Update</button></td>
                <tr>
                    <th scope="row">5</th>
                    <td>Strawberry Powder</td>
                    <td>1,65 KG</td>
                    <td>21/01/24</td>
                    <td>21/01/24</td>
                    <td><button class="btn btn-success">Update</button></td>
                </tr>
                </tr>
            </tbody>
        </table>
        <div class="position-relative">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>

        {{-- Modal Untuk Tambah Data --}}
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="namaBarang">Nama Barang</label>
                                <input type="text" name="" id="">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
