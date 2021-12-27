@extends('admin.master')
@section('main')
<form action="{{route('plant.store')}}"method='post'>
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Plant Name</label>
    <input required name="plant_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Plant ID</label>
    <input required name="plant_id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Plant Type</label>
<select name="plant_type" id="">
  @foreach($planttype as $planttype)
  <option value="{{$planttype->plant_name}}">{{$planttype->plant_name}}</option>
  @endforeach
</select>
    <!-- <input required name="plant_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Plant Quantity</label>
    <input required name="plant_quantity" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection