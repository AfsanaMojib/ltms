@extends('admin.master')
@section('main')

<div>
    <form>
        <div class="input-group rounded mt-3 mb-2">
            <input type="date" class="form-control rounded" name="from_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <input type="date" class="form-control rounded" name="to_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
    <button type="submit">submit</button>
  </span>
        </div>
    </form>
</div>

<form class="print_order">
    <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
</form>
<div id="divToPrint">

    @if ($errors->any())
     @foreach ($errors->all() as $error)
         <p class="alert alert-danger">{{$error}}</p>
     @endforeach
 @endif
    <center>

    <h1>Report</h1>
    </center>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Item Type</th>
      <th scope="col">Item Category</th>

      <th scope="col">Price</th>

      <th scope="col">Description</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>

    </tr>
  </thead>
  <tbody>
  @foreach($items as $item)

    <tr>
      <th scope="row">{{$item->item_name}}</th>
      <td>{{$item->ItemType->item_name}}</td>
      <td>{{$item->category->name}}</td>

      <td>{{$item->price}}</td>

      <td>{{$item->description}}</td>
      <td>{{$item->quantity}}</td>
      <td>{{$item->status}}</td>
    </tr>
    @endforeach


  </tbody>
</table>
</div>
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
