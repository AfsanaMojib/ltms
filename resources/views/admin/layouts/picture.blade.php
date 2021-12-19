@extends('admin.master')
@section('main')
<h1>Picture</h1>
<a href="{{route('picture.form')}}" class="btn btn-info">Add Picture</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">User Name</th>
      <th scope="col">User ID</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($pictures as $data)
    <tr>
      <th scope="row">{{$data->user_name}}</th>
      <td>{{$data->user_id}}</td>
      <!-- <td>{{$data->image}}</td> -->

      <td ><img src= "{{url('/uploads/'.$data->image)}}" alt="picture image" width="100px"></td>
      <td>
        <a class="btn btn-warning" href="">View</a>
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
@endsection