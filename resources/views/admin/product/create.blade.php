@extends('admin.master')

@section('main')
<form action="{{route('product.store')}}" method="post" enctype= multipart/form-data>
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Descrption</label>
    <textarea type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Password"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">image</label>
    <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop