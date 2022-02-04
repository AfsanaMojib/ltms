@extends('admin.master')


@section('main')

<form class="print_order">
    <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
</form>
<div id="divToPrint">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landscape Tree Management System</title>
    <style>
        body{
            background-color: #F6F6F6;
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Invoice Details</h1>
                </div>
                {{-- <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">assdad asd  asda asdad a sd</p>
                        <p class="text-white">assdad asd asd</p>
                        <p class="text-white">+91 888555XXXX</p>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No.: 001</h2>
                    {{-- <p class="sub-heading">Tracking No. fabcart2025 </p> --}}
                    {{-- <p class="sub-heading">Order Date: {{$orders->order_date}} </p> --}}
                    <p class="sub-heading">Email Address: {{ $orders->user->email}} </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name: {{ $orders->user->name}}  </p>
                    <p class="sub-heading">Address: {{ $orders->user->address}} </p>
                    <p class="sub-heading">Phone Number:{{ $orders->user->phone_number}}  </p>
                    {{-- <p class="sub-heading">City,State,Pincode:  </p> --}}
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>

            <br>

            <p>Amount:TK{{$orders->amount}} for {{ $orders->OrderProducts->count() }} Type of Products</p>
            {{-- <table class="table-bordered">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Total</th>
                    </tr>
                </thead>
                <tbody> --}}

                    {{-- @foreach($items as $item)

                    <tr>
                      <th scope="row">{{$item->item_name}}</th>
                      <td>{{$item->ItemType->item_name}}</td>
                      <td>{{$item->category->name}}</td>

                      <td>{{$item->price}}</td>


                      <td>{{$item->quantity}}</td>

                    </tr>
                    @endforeach
 --}}

                    {{-- @foreach($orders->invoicedetails as $order)
                                <tr>
                                    <td class="col-md-9">{{ $order->items->item_name}}</td>
                                    <td class="col-md-3">{{ $order->items->price}}</td>
                                    <td class="col-md-3">{{ $order->items->quantity}}</td>


                                </tr>

                            @endforeach --}}
                    {{-- <tr>
                        <td>Product Name</td>
                        <td>10</td>
                        <td>1</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Sub Total</td>
                        <td> 10.XX</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Tax Total %1X</td>
                        <td> 2</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td> 12.XX</td>
                    </tr> --}}
                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Status: Unpaid</h3>
            <h3 class="heading">Payment Mode: Cash on Delivery</h3>
        </div>

        {{-- <div class="body-section">
            <p>&copy; Copyright 2021 - Fabcart. All rights reserved.
                <a href="https://www.fundaofwebit.com/" class="float-right">www.fundaofwebit.com</a>
            </p>
        </div> --}}
    </div>
</div>
</body>
</html>







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
