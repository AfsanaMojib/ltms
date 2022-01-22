@extends('admin.master')


@section('main')
<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">
    <h1>Item Details</h1>

<p>Item Name: {{ $item->item_name}}</p>
<p>Item Type: {{ $item->ItemType->item_name}}</p>

<p> Item Category:{{$item->category->name}}</span></h4></p>
<p>Price: {{$item->price}}</p>
<p>Description: {{$item->description}}</p>


    

@endsection
<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://localhost/ltms-app/public/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>