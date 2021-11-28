@extends('admin.master')
@section('main')
<h1>Plants</h1>
<a href="{{route('plantname')}}"class="btn btn-danger">Plant Site</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Plant Name</th>
      <th scope="col">Plant ID</th>
      <th scope="col">Plant Type</th>
      <th scope="col">Plant Quantity</th>
    </tr>
  </thead>
  <tbody>
      @foreach($plant as $data)
    <tr>
      <th scope="row">{{$data->plant_name}}</th>
      <td>{{$data->phone_id}}</td>
      <td>{{$data->plant_type}}</td>
      <td>{{$data->plant_quantity}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection