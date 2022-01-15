@extends('admin.master')
@section('main')

<h1>User Feedback</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col"> User Name</th>
      <th scope="col">User Email</th>
      <th scope="col"> User Phone Number</th>
      <th scope="col">User Feedback</th>
    </tr>
  </thead>
  <tbody>
      @foreach($feedback as $data)
    <tr>
      <th scope="row">{{$data->user_name}}</th>
      <td>{{$data->user_email}}</td>
      <td>{{$data->user_phone_number}}</td>
      <td>{{$data->user_feedback}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection