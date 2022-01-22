@extends('admin.master')
@section('main')
<h1>Edit Item</h1>

@if(session()->has('success'))
<p class="alert alert-success">
  {{session()->get('success')}}
</p>
@endif
<form action="{{route('admin.item.update', $item->id)}}" method='post'>
  @method('PUT')

  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Item Name</label>
    <input name="item_name" type="text" value="{{$item->item_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" value="{{$item->item_type}}" class="form-label">Item Type</label>
    <select name="item_type_id" id="item_type">
      @foreach ($item_types as $item_type)
      <option value="{{ $item_type->id }}" {{ ($item_type->id == $item->ItemType->id)?'selected="selected"':'' }}>{{ $item_type->item_name }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Item Category</label>
    <select name="category_id" id="item_type">
      @foreach ($item_categories as $category)
      <option value="{{ $category->id }}" {{ ($category->id == $item->category->id)?'selected="selected"':'' }}>{{ $category->name }}</option>
      @endforeach
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
    <label for="exampleInputPassword1" class="form-label">Quantity</label>
    <input name="quantity" type="text" value="{{$item->quantity}}" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea name="description" type="text" value="" class="form-control" id="exampleInputPassword1">{{$item->description}} </textarea>
  </div>


  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection