@extends('admin.master')


@section('main')
<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">
    <h1>Plantingtool Details</h1>

<p>User Name: {{ $plantingtool->user_name}}</p>
<p>User Phone number: {{ $plantingtool->user_phone_number}}</p>

<p> User Phone Number: {{$plantingtool->user_phone_number}}</span></h4></p>
<p>User Address: {{$plantingtool->user_address}}</p>
<p>Tool Type: {{$plantingtool->tool_type}}</p>


    

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
