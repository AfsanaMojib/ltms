@extends('admin.master')
@section('main')
<h1>Item</h1>
<a href="{{route('item.form')}}" class="btn btn-warning">Add Item</a>

<form action="{{route('admin.item')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" name="search" placeholder="Search" arial-label="Search" aria-describedby="search-addon" />
    <!-- <label class="form-label" for="form1">Search</label> -->
  </div>


  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Item Type</th>
      <th scope="col">Item Category</th>
    
      <th scope="col">Price</th>
     
      <th scope="col">Description</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($item as $data)

    <tr>
      <th scope="row">{{$data->item_name}}</th>
      <td>{{$data->item_type}}</td>
      <td>{{$data->item_category}}</td>
      
      <td>{{$data->price}}</td>
     
      <td>{{$data->description}}</td>
      <td>
      <a class="btn btn-info" href="{{route('admin.item.details',$data->id)}}">View</a>
      <a class="btn btn-info" href="{{route('admin.item.edit',$data->id)}}">Edit</a>

      <a class="btn btn-warning" href="{{route('admin.item.delete',$data->id)}}">Delete</a>

      </td>
    </tr>
    @endforeach

    
  </tbody>
</table>
@endsection