@extends('admin.master')


@section('main')
    <h1> Soiltexture Details</h1>

<p>User Name: {{$soiltexture->user_name}}</p>
<p>User Phone Number: {{$soiltexture->user_phone_number}}</p>
<p>User Address: {{$soiltexture->user_address}}</p>
<p>Soil Type: {{$soiltexture->soil_type}}</p>



    

@endsection
