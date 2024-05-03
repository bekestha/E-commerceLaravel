@extends('backend.layout.headerfooter')
@section('body-content')
    <h1>Edit Sub-Category</h1>
    <form method="post" action="{{route('subcategory.update', $subcategory->id)}}">
      @csrf
      @foreach ($errors->all() as $message)
          <div class="alert alert-danger" role="alert">
            <strong>{{$message}}</strong>
          </div>
      @endforeach
      @foreach ($errors->all() as $message)
          <div class="alert alert-danger" role="alert">
            <strong>{{$message}}</strong>
          </div>
      @endforeach
      @method('put')
          <input type="text" name="name" value="{{$subcategory->name}}">
          <input type="text" name="category_id" value="{{$subcategory->category_id}}">
        
        <button type="submit">Update</button>
      </form>
@endsection