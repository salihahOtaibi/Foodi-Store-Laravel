@extends('layouts.appUserUi')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img src="https://cdn-icons-png.flaticon.com/128/561/561611.png" alt="item" height="100" width="100">
                </div>

                <div class="col-sm-8">
                    <h5 class="card-title text-success"><strong>Product Name: {{$prod_details->name}}</strong></h5>
                    <p class="card-text"><strong>Description:</strong> {{$prod_details->description}}</p>
                    <p class="card-text"><strong>Price:</strong> {{$prod_details->price}} SAR </p>
                    <p class="card-text"><strong>Category:</strong> {{$prod_details->category}}</p>
                </div>
            </div> 
            <div class="row text-center flex mt-4">
                <div class="col">
                    <a href="{{ route('addToCart')}}" class="btn btn-success mr-4">Add to Cart</a>
                    <a href="{{ route('meals') }}" class="btn btn-secondary">Back to Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection