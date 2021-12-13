@extends('admin.master')
@section('main')
<form action="{{route('planttype.store')}}" method='post'>
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Plant Name</label>
    <input required name="plant_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Plant ID</label>
    <input required name="plant_id" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Plant Details</label>
    <input required name="plant_details" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection