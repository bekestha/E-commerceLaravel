@extends('backend.layout.headerfooter')
@section('body-content')
    <h1>Category Table</h1>
    <a class="btn btn-success" href="{{route('category.create')}}">Add Category</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
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
              <a class="btn btn-primary" href="{{route('category.edit', $data->id)}}" role="button">Edit</a>
              <form method="post" action="{{route('category.destroy', $data->id)}}">
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