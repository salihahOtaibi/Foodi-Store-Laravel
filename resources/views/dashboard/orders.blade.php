@extends('layouts.appDash')


@section('content')

<div class="row mt-4">
        <h2 class="alert alert-success">Orders List</h2>
        <div class="col">
            <div class="card shadow-sm border-0">             
                <div class="card-body">
                    <table class="table table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <td>Customer ID</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $item)
                                <tr>
                                    <td>{{ $item->customer_id }}</td>
                                    <td>{{ $item->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection