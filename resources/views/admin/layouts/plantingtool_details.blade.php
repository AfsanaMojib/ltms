@extends('admin.master')


@section('main')
    <h1>Plantingtool Details</h1>

<p>User Name: {{ $plantingtool->user_name}}</p>
<p>User Phone number: {{ $plantingtool->user_phone_number}}</p>

<p> User Phone Number: <h4><span style="color: orange">BDT {{$plantingtool->user_phone_number}}</span></h4></p>
<p>User Address: {{$plantingtool->user_address}}</p>
<p>Tool Type: {{$plantingtool->tool_type}}</p>


    

@endsection
