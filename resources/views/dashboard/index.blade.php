@extends('layouts.appDash')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Welcome, {{ Auth::user()->name }}!</h3>
        <p class="badge bg-success mb-0">{{ now()->format('F j, Y, g:i A') }}</p>
    </div>
    <p>We hope you’re having a great day! Here’s an overview of your recent activity and some quick links to get started.</p>

    <div class="row mb-4">
        <div class="col-md-4">
            <a href="{{ route('products') }}" class="btn btn-primary w-100 py-3">
                <i class="bi bi-box"></i> Manage Products
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('orders') }}" class="btn btn-secondary w-100 py-3">
                <i class="bi bi-receipt"></i> View Orders
            </a>
        </div>
        <div class="col-md-4">
            <a href="#" class="btn btn-info w-100 py-3">
                <i class="bi bi-gear"></i> Settings
            </a>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-md-3">
            <div class="card bg-light p-3">
                <h4><i class="bi bi-box-seam"></i></h4>
                <h5>Total Products</h5>
                <p class="display-6">{{ $totalProds}}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light p-3">
                <h4><i class="bi bi-cart-check"></i></h4>
                <h5>Total Orders</h5>
                <p class="display-6">{{ $totalOrders}}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light p-3">
                <h4><i class="bi bi-people"></i></h4>
                <h5>Total Users</h5>
                <p class="display-6">{{ $totalUsers}}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-light p-3">
                <h4><i class="bi bi-star"></i></h4>
                <h5>Best Selling</h5>
                <p class="display-6">N/A</p>
            </div>
        </div>
    </div>
</div>
@endsection
