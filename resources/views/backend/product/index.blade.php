@extends('backend.layout.headerfooter')
@section('body-content')
    <h1>Product Table</h1>
    <a class="btn btn-success" href="{{route('product.create')}}">Add Product</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Category_id</th>
            <th scope="col">Subcategory_id</th>
            <th scope="col">brand_id</th>
            <th scope="col">Price</th>
            <th scope="col">Discount</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datas as $data)
          <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->image}}</td><td>
            <td>{{$data->category ?  $data->category->name  : 'undefined'}}</td>
            <td>{{$data->subcategory ? $data->subcategory->name  : 'undefined'}}</td>
            <td>{{$data->brand ? $data->brand->name  : 'undefined'}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->discount}}</td>
            <td>
              <img class="image" style="height:40px; width:50px" src="{{ asset($data->image) }}" alt="">
            </td>
            <td>
              <a class="btn btn-primary" href="{{route('product.edit', $data->id)}}" role="button">Edit</a>
              <form method="post" action="{{route('product.destroy', $data->id)}}">
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