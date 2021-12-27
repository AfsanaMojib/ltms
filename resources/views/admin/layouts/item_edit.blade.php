@extends('admin.master')
@section('main')
<h1>Edit Item</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif
<form action="{{route('admin.etask.update', $item->id)}}" method='post'>
@method('PUT')

    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Item Name</label>
    <input name="item_name" type="text"  value="{{$item->item_name}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" value="{{$item->item_type}}" class="form-label">Item Type</label>
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
  </select>
  </div>
  
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input name="price" type="number" value="{{$item->price}}" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <input name="status" type="text" value="{{$item->status}}" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea name="description" type="text" value="{{$item->description}}" class="form-control" id="exampleInputPassword1"> </textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection