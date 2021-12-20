@extends('admin.master')


@section('main')
    <h1> Planttype Details</h1>

<p>Plant Name: {{$planttype->plant_name}}</p>
<p>Plant ID: {{$planttype->plant_id}}</p>
<p>Plant Details: {{$planttype->plant_details}}</p>



    

@endsection
