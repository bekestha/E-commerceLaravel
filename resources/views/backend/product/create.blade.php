@extends('backend.layout.headerfooter')
@section('body-content')
    <h1>Create Product</h1>
    <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
      @csrf
      @foreach ($errors->all() as $message)
          <div class="alert alert-danger" role="alert">
            <strong>{{$message}}</strong>
          </div>
      @endforeach
      <label for="">name</label>
      <input type="text" name="name"><br>

      <label for="">description</label>
      <input type="text" name="description"><br>

      <label for="">image</label>
      <input type="file" name="image"><br>

      <label for="">category_id</label>
      <select name="category_id" id="">
        <option value="">select Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select> <br>

      <label for="">subcategory_id</label>
      <select name="subcategory_id" id="">
        <option value="">select subcategory</option>
        @foreach ($subcategories as $subcategory)
            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
        @endforeach
    </select> <br>
      <label for="">brand_id</label>
      <select name="brand_id" id="">
        <option value="">select brand</option>
        @foreach ($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
        @endforeach
    </select> <br>

      <label for="">price</label>
      <input type="text" name="price"><br>

      <label for="">discount</label>
      <input type="text" name="discount"><br>
        <button type="submit">Create</button>
      </form>
@endsection