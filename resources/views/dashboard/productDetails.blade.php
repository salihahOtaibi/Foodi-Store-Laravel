@extends('layouts.appDash')


@section('content')

<div class="container">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="alert alert-info">Products Details</h3>
                    <form action="{{route('createNewDet')}}" method="post">
                        @csrf
                        <div class="row">
                            <label for="id_product" class="form-label">Product:</label>
                            <select id="id_product" name="id_product" class="form-select">
                                @foreach($prod as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label for="productPrice" class="form-label">Price:</label>
                                <input type="text" id="productPrice" name="productPrice" class="form-control">
                            </div>

                            <div class="col">
                                <label for="qty" class="form-label">Quantity:</label>
                                <input type="text" id="qty" name="qty" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="img" class="form-label">Image:</label>
                                <input type="text" id="img" name="img" class="form-control">
                            </div>
                            <div class="col">
                                <label for="category" class="form-label">Category:</label>
                                <input type="text" id="category" name="category" class="form-control">
                            </div>
                        </div>

                        <div class="row text-center mt-4">
                            <div class="col">
                                <button  class="btn btn-primary">Save</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="row mt-4">
        <div class="col">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary">
                    <h5 class="mb-0">Product details List</h5>
                </div>
                
                <div class="card-body">
                    <table class="table table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th colspan="2">Process</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prod_details as $item)
                                <tr>
                                    <td>{{$item->id_products}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{$item->img}}</td>
                                    <td>{{$item->category}}</td>
                                    <td><a href="#"><i class="bi bi-trash-fill text-danger"></i></a></td>
                                    <td><a href="#"><i class="bi bi-pencil-square text-success"></i></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
