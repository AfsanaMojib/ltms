@extends('admin.master')
@section('main')
<h1>Item</h1>
<a href="{{route('item.form')}}" class="btn btn-warning">Item</a>
  
<table class="table">
  <thead>
    <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Item Type</th>
      <th scope="col">Item Category</th>
      <th scope="col">Type ID</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
  @foreach($item as $data)

    <tr>
      <th scope="row">{{$data->item_name}}</th>
      <td>{{$data->item_type}}</td>
      <td>{{$data->item_category}}</td>
      <td>{{$data->type_id}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->description}}</td>
    </tr>
    @endforeach

    
  </tbody>
</table>
@endsection