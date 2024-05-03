@extends('backend.layout.headerfooter')
@section('body-content')
    <h1>Category Table</h1>
    <a class="btn btn-success" href="{{route('subcategory.create')}}">Add Category</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Category_id</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datas as $data)
          <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->category_id}}</td>
            <td>
              <img class="image" style="height:40px; width:50px" src="{{ asset($data->image) }}" alt="">
            </td>
            <td>{{$data->subcategory ? $data->subcategory->name : 'undefined'}}</td>
            <td>
              <a class="btn btn-primary" href="{{route('subcategory.edit', $data->id)}}" role="button">Edit</a>
              <form method="post" action="{{route('subcategory.destroy', $data->id)}}">
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