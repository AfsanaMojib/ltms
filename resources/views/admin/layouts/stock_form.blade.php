@extends('admin.master')
@section('main')
<form action="{{route('stock.store')}}" method='post'>
    @csrf
  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Tree Name</label>
    <input name="tree_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div> -->
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter Tree Catagory</label>
    <input name="tree_catagory" type="text" class="form-control" id="exampleInputPassword1">
  </div> -->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter Select Plant</label>
    <!-- <input name="tree_quantity" type="number" class="form-control" id="exampleInputPassword1"> -->
    <select name="select_plant" id="select_plant">
    <option value="cabbage">Cabbage</option>
    <option value="mango">Mango</option>
    <option value="lichi">Lichi</option>
    <option value="lemon">Lemon</option>
  </select>
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter Unit Price</label>
    <input name="unit_price" type="number" class="form-control" id="exampleInputPassword1">
  </div> -->
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter Tree ID</label>
    <input name="tree_id
    " type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection