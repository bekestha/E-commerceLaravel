@extends('backend.layout.headerfooter')
@section('body-content')
    <h1>Edit Product</h1>
    <form method="post" action="{{route('product.update', $product->id)}}">
      @csrf
      @foreach ($errors->all() as $message)
          <div class="alert alert-danger" role="alert">
            <strong>{{$message}}</strong>
          </div>
      @endforeach
      @method('put')
          <input type="text" name="name" value="{{$product->name}}">
          <input type="text" name="description" value="{{$product->description}}">
          <input type="text" name="image" value="{{$product->image}}">
          <input type="text" name="category_id" value="{{$product->category_id}}">
          <input type="text" name="subcategory_id" value="{{$product->subcategory_id}}">
          <input type="text" name="brand_id" value="{{$product->brand_id}}">
          <input type="text" name="price" value="{{$product->price}}">
          <input type="text" name="discount" value="{{$product->discount}}">
        
        <button type="submit">Update</button>
      </form>
@endsection