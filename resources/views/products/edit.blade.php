@extends('layouts.dashboard')
@section('title', 'edit')

@section('content')
<form action="{{route('products.update', $product->id)}}" method="POST"  enctype="multipart/form-data">

    @csrf
@method('PUT')  
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$product->product_name}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$product->product_description}}</textarea>
    </div>
    <div class="mb-3 mt-3">
        <label for="exampleFormControlInput1" class="form-label">Product Price</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="price" value="{{$product->product_price}}">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">Upload Image :</label>
    <input type="file" class="form-control" id="exampleFormControlInput2" name="image">
</div>
<button type="submit" class="btn btn-success mt-3">Update</button>

</form>

@stop