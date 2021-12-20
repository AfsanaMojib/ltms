@extends('admin.master')


@section('main')
    <h1>Pesticide Details</h1>

<p>Pesticide Name: {{ $pesticide->pesticide_name}}</p>
<p>Pesticide Type: {{ $pesticide->pesticide_type}}</p>
<p>Pesticide Details: {{$pesticide->pesticide_details}}</p>
<p>Pesticide Price: {{$pesticide->pesticide_price}}</p>


    

@endsection
