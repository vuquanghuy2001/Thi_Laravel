@extends('admin.layout.master')

@section('main')

    <h4 class="mb-4">
        {{ request()->segment(3) == 'add' ? 'Add new' : 'Edit' }} product
    </h4>

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp"
                   value="{{ old('name') ??  $product->name ?? '' }}">
            <small id="nameHelp" class="form-text text-muted">What is your product's name.</small>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price"
                   value="{{ old('price') ?? $product->price  ?? '' }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description"
                      rows="3">{{ old('description') ?? $product->description  ?? '' }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">
            {{ request()->segment(3) == 'add' ? 'Add new' : 'Edit' }} product
        </button>

        <a href="admin/product" class="btn btn-danger">Cancel</a>
    </form>

@endsection
