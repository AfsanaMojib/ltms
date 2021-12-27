@extends('admin.master')


@section('main')
    <h1>Item Details</h1>

<p>Item Name: {{ $item->item_name}}</p>
<p>Item Type: {{ $item->item_type}}</p>

<p> Item Category:{{$item->item_category}}</span></h4></p>
<p>Price: {{$item->price}}</p>
<p>Description: {{$item->description}}</p>


    

@endsection
