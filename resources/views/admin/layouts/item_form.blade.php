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
    <select name="item_type_id" id="item_type">
      @foreach ($item_types as $item_type)
      <option value="{{ $item_type->id }}">{{ $item_type->item_name }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Item Category</label>
    <select name="category_id" id="item_type">
      @foreach ($item_categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
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
    <label for="exampleInputPassword1" class="form-label">Quantity</label>
    <input name="quantity" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea name="description" type="text" class="form-control" id="exampleInputPassword1"> </textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection