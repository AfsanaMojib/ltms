@extends('admin.master')


@section('main')

<form class="print_order">
    <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
</form>
<div id="divToPrint">
    <center>
    <h1>Feedback Details</h1>


<p>User Name: {{$feedback->user_name}}</p>
<p>User Email: {{$feedback->user_email}}</p>
<p>User Phone Number: {{$feedback->user_phone_number}}</p>
<p>User Feedback: {{$feedback->user_feedback}}</p>
</div>
</center>




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
