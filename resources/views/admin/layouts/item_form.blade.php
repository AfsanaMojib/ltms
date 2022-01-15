@extends('admin.master')
@section('main')
<form action="{{route('item.store')}}" method='post'>
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Item Name</label>
    <input name="item_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Item Type</label>
    <select name="item_type" id="item_type">
    <option value="tree">Tree</option>
    <option value="tools">Tools</option>
    <option value="pesticides">Pesticides</option>
    <option value="soil texture">Soil Texture</option>
  </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Item Category</label>
    <select name="item_category" id="item_category">
    <option value="vegetable">Vegetable</option>
    <option value="fruit">Fruit</option>
    <option value="flower">Flower</option>
    <option value="medicinal_plants">Medicinal Plants</option>
    <option value="pesticide">Pesticide</option>
    <option value="tool">Tool</option>
  </select>
  </div>
  
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input name="price" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <input name="status" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea name="description" type="text" class="form-control" id="exampleInputPassword1"> </textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection