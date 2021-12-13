@extends('admin.master')
@section('main')
<form action="{{route('plantingtool.store')}}"method='post'>
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter User Name</label>
    <input required name="user_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter User Phone Number</label>
    <input required name="user_phone_number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter User Address</label>
    <input required name="user_address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
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
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  
  
@endsection