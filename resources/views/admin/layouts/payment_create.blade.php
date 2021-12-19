@extends('admin.master')

@section('main')

<h1>Payment List</h1>

<a href="{{route('admin.payment.form')}}" class="btn btn-success">Submit Your Payment Record</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Product Type</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Product Price</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($payment as $data)
    <tr>
      <td scope="row">{{$data->name}}</th>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->product_type}}</td>
      <td>{{$data->product_quantity}}</td>
      <td>{{$data->product_price}}</td>
      <td>
        <a class="btn btn-warning" href="">View</a>
      </td>
      
    </tr>
     @endforeach
  </tbody>
</table>

@endsection