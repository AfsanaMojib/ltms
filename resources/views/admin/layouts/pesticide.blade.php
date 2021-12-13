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
      <th scope="col">Pesticide Price</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pesticide as $data)
<tr>
      <th scope="row">{{$data->pesticide_name}}</th>
      <td>{{$data->pesticide_type}}</td>
      <td>{{$data->pesticide_details}}</td>
      <td>{{$data->pesticide_price}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection