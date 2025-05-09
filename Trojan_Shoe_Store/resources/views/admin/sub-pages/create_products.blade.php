@extends('admin.layouts.app')

@section('content')
<div class="container w-50 align-items-center">
    <h2 class="mb-4">Add Product</h2>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.products') }}" enctype="multipart/form-data">
    @csrf

    <div class="input-group mb-3 w-100">
        <input class="form-control form-control-md border border-dark" name="name" type="text" placeholder="Product Name" required value="{{ old('name') }}">
    </div>

    <div class="input-group mb-3 w-100">
        <input class="form-control form-control-md border border-dark" name="quantity" type="number" placeholder="Quantity" required value="{{ old('quantity') }}">
    </div>

    <div class="input-group mb-3 w-100">
        <input class="form-control form-control-md border border-dark" name="size" type="text" placeholder="Size" required value="{{ old('size') }}">
    </div>

    <div class="input-group mb-3 w-100">
        <input class="form-control form-control-md border border-dark" name="price" type="number" placeholder="Price" required value="{{ old('price') }}">
    </div>

    <div class="input-group mb-3 w-100">
        <input class="form-control form-control-md border border-dark" name="loc" type="file" required>
    </div>

    <div class="btn justify-content-center mb-3">
        <button type="submit" class="btn btn-success w-100">Add Product</button>
    </div>
</form>

</div>
@endsection
