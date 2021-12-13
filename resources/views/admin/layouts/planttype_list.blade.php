@extends('admin.master')
@section('main')
<h1>Plant Type</h1>
<a href="{{route('planttype.form')}}" class="btn btn-warning">Plant Type</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Plant Name</th>
      <th scope="col">Plant ID</th>
      <th scope="col">Plant Details</th>
    </tr>
  </thead>
  <tbody>
      @foreach($planttype as $data)
    <tr>
      <th scope="row">{{$data->plant_name}}</th>
      <td>{{$data->plant_id}}</td>
      <td>{{$data->plant_details}}</td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection

