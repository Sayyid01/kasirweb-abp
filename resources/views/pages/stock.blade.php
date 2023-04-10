@extends('layouts.master')

@section('title', 'Stock')
@section('title-2', 'Stock')

@section('content')
    <div class="container-m mt-5 vh-100">
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
        <button type="button" class="btn btn-secondary position-relative" href="#">Add Item</button>
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
    </div>
@endsection
