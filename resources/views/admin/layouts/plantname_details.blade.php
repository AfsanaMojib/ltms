@extends('admin.master')


@section('main')
<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">

    <h1>Plant Name Details</h1>

    
<p>Plant Name: {{$plant->plant_name}}</p>
<p>Plant ID: {{$plant->plant_id}}</span></h4></p>
<p>Plant Type: {{$plant->plant_type}}</p>
<p>Plant Quantity: {{$plant->plant_quantity}}</p>

    

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
