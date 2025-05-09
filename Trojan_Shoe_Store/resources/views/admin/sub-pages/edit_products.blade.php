@extends('admin.layouts.app')

@section('content')
<div class="container w-50 align-items-center">
    <h2 class="mb-4">Edit Product</h2>

    <form method="POST" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="input-group mb-3 w-100">
            <input class="form-control form-control-md border border-dark" name="name" type="text" placeholder="Product Name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div class="input-group mb-3 w-100">
            <input class="form-control form-control-md border border-dark" name="quantity" type="number" placeholder="Quantity" value="{{ old('quantity', $product->quantity) }}" required>
        </div>

        <div class="input-group mb-3 w-100">
            <input class="form-control form-control-md border border-dark" name="size" type="text" placeholder="Size" value="{{ old('size', $product->size) }}" required>
        </div>

        <div class="input-group mb-3 w-100">
            <input class="form-control form-control-md border border-dark" name="price" type="number" placeholder="Price" value="{{ old('price', $product->price) }}" required>
        </div>

        <div class="mb-3">
            <label for="loc" class="form-label">Current Image</label><br>
            @if($product->loc)
                <img src="{{ asset($product->loc) }}" alt="Product Image" style="width: 100px; height: 100px;"><br>
            @else
                <p>No image uploaded.</p>
            @endif
        </div>

        <div class="input-group mb-3 w-100">
            <input class="form-control form-control-md border border-dark" name="loc" type="file">
        </div>

        <button type="submit" class="btn btn-success w-100">Update Product</button>
    </form>
</div>

@endsection
