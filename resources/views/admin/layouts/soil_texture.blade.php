@extends('admin.master')
@section('main')
<h1>Soil Texture</h1>

  
<a href="{{route('soiltexture.form')}}" class="btn btn-success">Choose Soil Type</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">User Name</th>
      <th scope="col">User Phone Number</th>
      <th scope="col">User Address</th>
      <th scope="col">Soil Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($soiltexture as $data)
    
    <tr>
      <th scope="row">{{$data->user_name}}</th>
      <td>{{$data->user_phone_number}}</td>
      <td>{{$data->user_address}}</td>
      <td>{{$data->soil_type}}</td>
      <td>
        <a class="btn btn-danger" href="{{route('admin.soiltexture.details',$data->id)}}">View</a>
        <a class="btn btn-danger" href="{{route('admin.soiltexture.delete',$data->id)}}">Delete</a>
      </td>
    </tr>
  @endforeach
    
  </tbody>
</table>
@endsection