@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.create') }}" title="Create a product">
                    Add New
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif

    <table class="table table-hover table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>description</th>
            <th>Price</th>
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id  }}</td>
                <td>{{ $product->name  }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->created_at }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('product.show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">Edit</a>
                    <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button  type="submit" class="btn btn-danger" >Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection