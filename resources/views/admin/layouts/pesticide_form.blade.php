@extends('admin.master')
@section('main')

<form action="{{route('pesticide.store')}}" method='post'>
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pesticide Name</label>
    <input name="pesticide_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pesticide Type</label>
    <input name="pesticide_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pesticide Details</label>
    <input name="pesticide_details" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pesticide Price</label>
    <input name="pesticide_price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection