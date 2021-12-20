@extends('admin.master')
@section('main')
<h1>Pesticide</h1>
<a href="{{route('pesticide.form')}}"class="btn btn-warning">Pesticide</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Pesticide Name</th>
      <th scope="col">Pesticide Type</th>
      <th scope="col">Pesticide Details</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($pesticide as $data)
<tr>
      <th scope="row">{{$data->pesticide_name}}</th>
      <td>{{$data->pesticide_type}}</td>
      <td>{{$data->pesticide_details}}</td>
      <td>{{$data->pesticide_price}}</td>
      <td>
      <a class="btn btn-warning" href="{{route('admin.pesticide.details',$data->id)}}">View</a>
    <a class="btn btn-warning" href="{{route('admin.pesticide.delete',$data->id)}}">Delete</a>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection