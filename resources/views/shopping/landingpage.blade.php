@extends('layouts.appUserUi')

@section('content')

<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h2>Welcome to Foodi – Your Best Delivery App! </h2>
        </div>
    </div>


    <div class="row mt-4">
        <div class="col">
            <a href="{{route('meals')}}">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                        <img src="https://cdn-icons-png.flaticon.com/128/2515/2515183.png" alt="food" class="rounded" height="80" width="80">
                        </div>
                        <div class="col">
                            <h5 class="text-success">Order Meals</h5>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>

        <div class="col">
            <a href="#">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                        <img src="https://cdn-icons-png.flaticon.com/128/6951/6951865.png" alt="food" class="rounded" height="80" width="80">
                        </div>
                        <div class="col">
                            <h5 class="text-success">Diet Subscriptions</h5>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>

        <div class="col">
            <a href="#">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                        <img src="https://cdn-icons-png.flaticon.com/128/1682/1682360.png" alt="food" class="rounded" height="80" width="80">
                        </div>
                        <div class="col">
                            <h5 class="text-success">Grocery</h5>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>

@endsection