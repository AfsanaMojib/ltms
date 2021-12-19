@extends('admin.master')
@section('main')

<h1>Planting Tool List</h1>
<a href="{{route('planting.form')}}" class="btn btn-success">Planting Tool</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">User Name</th>
      <th scope="col">User Phone Number</th>
      <th scope="col">User Address</th>
      <th scope="col">Planting Tool Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($plantingtool as $data)
    <tr>
      <th scope="row">{{$data->user_name}}</th>
      <td>{{$data->user_phone_number}}</td>
      <td>{{$data->user_address}}</td>
      <td>{{$data->tool_type}}</td>
      <td>
      <a class="btn btn-info" href="{{route('admin.plantingtool.details',$data->id)}}">View</a>

      </td>

      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection