@extends('admin.admins')

@section('titleFav' , "hi itts me")

@section('Head' , "ayah")



@section('content')
@section('title', 'index')


@section('content')





@if (session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="card-body">
        <div class="table-responsive">

            <a href="{{route('products.create')}}" class="btn btn-success">Add Product</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>

                            <th scope="col">Product Price</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        </table>
        @foreach ($products as $Product)

            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$product->product_name}}</td>
                  <td>
                <img src="{{asset($product->image)}}" style="height: 70px; width:70px" alt="image">
                </td>
                <td>{{$product->product_price}}</td>

<td>
    @if($product->Category)
        {{$product->Category->category_name}}
    @else
        <span>No Category</span>
    @endif
</td>
                <td><a href="{{route('products.show', $product['id'])}}" class="btn btn-info">view</a>
                    <a href="{{route('products.edit', $product['id'])}}" class="btn btn-primary">Edit</a>
                    <form style="display:inline;" method='POST' action={{route('products.destroy', $product->id)}} onsubmit="return deleteconform()" >
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                </td>
            </tr>
        @endforeach



        </div>
    </div>



@stop
@endsection