@extends('backend.layout.headerfooter')
@section('body-content')
    <h1>Edit Banner</h1>
    <form method="post" action="{{route('banner.update', $banner->id)}}">
      @csrf
      @foreach ($errors->all() as $message)
          <div class="alert alert-danger" role="alert">
            <strong>{{$message}}</strong>
          </div>
      @endforeach
      @method('put')
          <input type="text" name="name" value="{{$banner->name}}">
          <input type="file" name="image" value="{{$banner->image}}">
        
        <button type="submit">Update</button>
      </form>
@endsection