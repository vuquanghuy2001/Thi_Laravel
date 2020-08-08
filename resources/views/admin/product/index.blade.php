@extends('admin.layout.master')


@section('main')



    <h4 class="mb-4">
        List of products
        <a href="{{ route('admin.product') }}/add" class="btn btn-success ml-4">Add product</a>
    </h4>

    <form method="get" class="form-inline my-2 my-lg-0">
        <input name="id" class="form-control mr-sm-2" type="search" placeholder="Find Product: by id"
               aria-label="Search" value="{{ old('id') }}">
        <input name="name" class="form-control mr-sm-2" type="search" placeholder="Find Product: by name"
               aria-label="Search" value="{{ old('name') }}">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>


    <table class="table table-hover mt-4">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Function</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->product_id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="admin/product/edit/{{ $product->product_id }}" class="btn btn-sm btn-warning">Edit</a>

                    <form class="d-inline" action="admin/product/delete/{{ $product->product_id }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete the product?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
