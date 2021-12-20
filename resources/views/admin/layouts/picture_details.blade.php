@extends('admin.master')


@section('main')
    <h1>Picture Details</h1>

<p>User Name: {{ $pictures->user_name}}</p>
<p>User ID: {{ $pictures->user_id}}</p>
<p>Image: {{$pictures->image}}</p>
<p>Image Type: {{$pictures->image_type}}</p>


    

@endsection
