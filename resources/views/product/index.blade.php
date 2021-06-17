@extends('layout.app1')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> List Products</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active"><a href="#">Simple Tables</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="clearfix"></div>
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{ route('product.create') }}" title="Create a product">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>
            <div class="tile">
                {{--<h3 class="tile-title">Responsive Table</h3>--}}
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p></p>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id  }}</td>
                                    <td>{{ $product->name  }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a class="btn btn-info" href="{{ route('product.show',$product->id) }}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a class="btn btn-primary" href="{{ route('product.edit',$product->id) }}">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {!! $products->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection