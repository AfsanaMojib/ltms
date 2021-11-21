@extends('admin.master')

@section('main')

<h1>Create a Payment</h1>


<form action="{{route('payment.store')}}"method='post'>
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter User Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter User Phone Number</label>
    <input name="phone number" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter User Address</label>
    <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter User Product Type</label>
    <input name="product type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Product Quantity</label>
    <input name="product quantity" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Product Price</label>
    <input name="product price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-check">
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
    <label class="form-check-label" for="exampleCheck1"></label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection