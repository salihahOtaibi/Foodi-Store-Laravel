@extends('layouts.appDash')

@section('content')

<!--Delete Modal -->
<div class="modal" tabindex="-1" id="delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation Message!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Do you really want to delete this record?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" onclick="confirm()">Confirm</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row mt-5">
        <!-- Add New Product Modal -->
        <div class="modal" tabindex="-1" id="addProduct">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Adding New Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('createProduct') }}" method="get">
                            <div class="row">
                                <div class="col">
                                    <label for="productName">Product Name: </label>
                                    <input type="text" class="form-control p-2" name="productName" id="productName">
                                </div>
                                <div class="col">
                                    <label for="productDescription">Description: </label>
                                    <input type="text" class="form-control p-2" name="productDescription" id="productDescription">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <button type="submit" class="btn btn-success w-100">Save</button>
                                </div>
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

    <!-- Create New Product Button -->
    <div class="row">
        <div class="col text-end">
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addProduct">Create New Product</button>
        </div>
    </div>

    <!-- Product List Table -->
    <div class="row mt-4">
        <div class="col">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Product List</h5>
                </div>
                
                <div class="card-body">
                    <table class="table table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Product Description</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prod as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <a href="#" onclick="lunch({{ $item->id }})">
                                            <i class="bi bi-trash-fill text-danger" data-bs-toggle="tooltip" title="Delete"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('edit', ['id' => $item->id]) }}">
                                            <i class="bi bi-pencil-square text-success" data-bs-toggle="tooltip" title="Edit"></i>
                                        </a>
                                    </td>
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
