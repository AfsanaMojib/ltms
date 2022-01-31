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
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      @foreach($feedback as $data)
    <tr>
      <th scope="row">{{$data->user_name}}</th>
      <td>{{$data->user_email}}</td>
      <td>{{$data->user_phone_number}}</td>
      <td>{{$data->user_feedback}}</td>
      <td>
        <a class="btn btn-info" href="{{route('admin.feedback.details',$data->id)}}">View</a>
        <a class="btn btn-danger" href="{{route('admin.feedback.delete',$data->id)}}">Delete</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
