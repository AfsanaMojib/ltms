@extends('admin.master')
@section('main')
<h1>stock</h1>
<a href="{{route('stock.form')}}"class="btn btn-warning">Stock</a>
<table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">Tree Name</th>
      <th scope="col">Tree Catagory</th> -->
      <th scope="col">Tree Quantity</th>
      <!-- <th scope="col">Unit Price</th> -->
      <th scope="col">Tree ID</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($stock as $data)
   
    <tr>
      <!-- <th scope="row">{{$data->tree_name}}</th> -->
      <!-- <td>{{$data->tree_catagory}}</td> -->
      <td>{{$data->tree_quantity}}</td>
      <!-- <td>{{$data->unit_price}}</td> -->
      <td>{{$data->tree_id}}</td>
      <td>
        <a class="btn btn-secondary" href="">View</a>
      </td>

    </tr>
    @endforeach
   
  </tbody>
</table>
@endsection


