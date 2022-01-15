@extends('admin.master')
@section('main')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    @foreach($user as $data)
    <tr>
      <th scope="row">{{$data->name}}</th>
      <td>{{$data->email}}</td>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->role}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection
