@extends('admin.master')
@section('main')
<form action="{{route('admin.plantingtool.update',$plantingtool->id)}}"method='post'>
    @method('PUT')
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter User Name</label>
    <input required value="{{$plantingtool->user_name}}" name="user_name" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter User Phone Number</label>
    <input required  value="{{$plantingtool->user_phone_number}}" name="user_phone_number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter User Address</label>
    <input required  value="{{$plantingtool->user_address}}" name="user_address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">3
  <label for="exampleInputEmail1" class="form-label">Choose Planting Tool Type</label>
  <select name="tool_type" id="tool_type">
    <option value="hoe">Hoe</option>
    <option value="fork">Fork</option>
    <option value="spade">Spade</option>
    <option value="garden glove">Garden Glove</option>
    <option value="rake">Rake</option>
     </select>
    <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

  
  
@endsection