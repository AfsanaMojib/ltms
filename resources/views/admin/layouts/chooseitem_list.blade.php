@extends('admin.master')
@section('main')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Plant</th>
      <th scope="col">Tool</th>
      <th scope="col">Soil</th>
      <th scope="col">Pesticide</th>
    </tr>
  </thead>
  <tbody>
      @foreach($product as $data)
    <tr>
      <th scope="row">{{$data->plant}}</th>
      <td>{{$data->tool}}</td>
      <td>{{$data->soil}}</td>
      <td>{{$data->pesticide}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection