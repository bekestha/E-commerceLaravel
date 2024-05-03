@extends('backend.layout.headerfooter')
@section('body-content')
    <h1>Banner Table</h1>
    <a class="btn btn-success" href="{{route('banner.create')}}">Add Banner</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">image</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datas as $data)
          <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->image}}</td>
            <td>
              <img class="image" style="height:40px; width:50px" src="{{ asset($data->image) }}" alt="">
            </td>
            <td>
              <a class="btn btn-primary" href="{{route('banner.edit', $data->id)}}" role="button">Edit</a>
              <form method="post" action="{{route('banner.destroy', $data->id)}}">
              @csrf
              @method('delete')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
@endsection