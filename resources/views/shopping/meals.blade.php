@extends('layouts.appUserUi')

@section('content')

<div class="container">
    <div class="row mt-5">
        @foreach($prods as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <img src="https://cdn-icons-png.flaticon.com/128/561/561611.png" alt="item" height="80" width="80">
                            </div>
                            <div class="col">
                                <h4 class="text-success">{{$item->name}}</h4>
                                <div class="row mt-2">
                                    <p>{{$item->description}}</p>
                                </div>
                            </div>
                            <div class="row text-center mt-3">
                                <div class="col">
                                    <a href="{{ route('mealsDetails', ['id' => $item->id]) }}" class="btn btn-success">See details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
