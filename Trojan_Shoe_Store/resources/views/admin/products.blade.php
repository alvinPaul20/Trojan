@extends('admin.layouts.app')

@section('content')
<div class="container ms-5 d-flex justify-content-center align-items-center">
    <div class="row ms-5">
        <!-- Card for displaying the Products table -->
        <div class="col-md-12 ms-5">
            <div class="card ms-5">
                <div class="card-header d-flex justify-content-between">
                    <div class="card-title mb-0">All Products</div>
                    <!-- Add Product Button -->
                    <a href="{{ route('admin.sub-pages.create_product') }}" class="btn btn-outline-success btn-md">Add Product</a>
                </div>
                <div class="card-body">
                    <div class="card-sub">
                        This is the table displaying all products:
                    </div>
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Size</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $index => $product)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->size }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        @if($product->loc)
                                            <img src="{{ asset($product->loc) }}" alt="Product Image" style="width: 50px; height: 50px;">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>{{ $product->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <!-- Edit Button for Each Product -->
                                        <a href="{{ route('admin.sub-pages.edit_products', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <!-- Delete Form -->
                                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
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
