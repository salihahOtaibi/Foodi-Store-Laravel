@extends('layouts.appDash')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-8 col-md-6">
            <form action="{{ route('update') }}" method="GET">
                <div class="card mt-5 shadow-sm border-0">
                    <div class="card-body bg-light">
                        <h5 class="card-title text-center mb-4">Update Product Details</h5>

                        <input type="hidden" name="id" value="{{ $products->id }}">

                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="t1">Product Name:</label>
                                <input type="text" id="t1" name="t1" value="{{ $products->name }}" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="t2">Product Description:</label>
                                <input type="text" id="t2" name="t2" value="{{ $products->description }}" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary w-100">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
