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
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($plant as $data)
    <tr>
      <th scope="row">{{$data->plant_name}}</th>
      <td>{{$data->plant_id}}</td>
      <td>{{$data->plant_type}}</td>
      <td>{{$data->plant_quantity}}</td>
      <td>
        <a class="btn btn-info" href="{{route('admin.plantname.details',$data->plant_id)}}">View</a>
      </td>
      <td>
      <a class="btn btn-info" href="{{route('admin.plantname.delete',$data->id)}}">Delete</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection