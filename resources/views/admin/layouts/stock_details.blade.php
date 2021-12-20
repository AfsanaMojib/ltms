@extends('admin.master')


@section('main')
    <h1> Stock Details</h1>

<p>Tree Name: {{$stock->tree_name}}</p>
<p>Tree Catagory: {{$stock->tree_catagory}}</p>
<p>Tree Quantity: {{$stock->tree_quantity}}</p>
<p>Unit Price: {{$stock->unit_price}}</p>



    

@endsection
