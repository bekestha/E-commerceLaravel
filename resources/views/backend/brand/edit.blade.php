@extends('backend.layout.headerfooter')
@section('body-content')
    <h1>Edit Brand</h1>
    <form method="post" action="{{route('brand.update', $brand->id)}}">
      @csrf
      @foreach ($errors->all() as $message)
          <div class="alert alert-danger" role="alert">
            <strong>{{$message}}</strong>
          </div>
      @endforeach
      @method('put')
          <input type="text" name="name" value="{{$brand->name}}">
          <input type="text" name="image" value="{{$brand->image}}">
        
        <button type="submit">Update</button>
      </form>
@endsection