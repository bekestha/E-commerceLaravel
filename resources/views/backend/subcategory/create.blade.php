@extends('backend.layout.headerfooter')
@section('body-content')
    <h1>Create Sub-Category</h1>
    <form method="post" action="{{route('subcategory.store')}}" enctype="multipart/form-data">
      @csrf
      @foreach ($errors->all() as $message)
          <div class="alert alert-danger" role="alert">
            <strong>{{$message}}</strong>
          </div>
      @endforeach
      <label for="">name</label>
      <input type="text" name="name"><br>

      <label for="">image</label>
      <input type="file" name="image"><br>

      <label for="">category_id</label>
      <input type="text" name="category_id"><br>
        <button type="submit">Create</button>
      </form>
@endsection