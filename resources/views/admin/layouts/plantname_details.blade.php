@extends('admin.master')


@section('main')
    <h1>Plant Name Details</h1>

    
<p>Plant Name: {{$plant->plant_name}}</p>
<p>Plant ID: <h4><span style="color: orange">BDT {{$plant->plant_id}}</span></h4></p>
<p>Plant Type: {{$plant->plant_type}}</p>
<p>Plant Quantity: {{$plant->plant_quantity}}</p>

    <lable>Plantname:</lable>
    <input type="text" class="form-control" value="{{$plant->plant_name}}">
    <input type="file" class="form-control">

@endsection
