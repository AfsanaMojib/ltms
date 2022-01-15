@extends('admin.master')
@section('main')
<h1>Edit Soil Texture</h1>

<form action="{{route('admin.soiltexture.update', $soiltexture->id)}}"method='post'enctype="multipart/form-data">
    @method('PUT')
    
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter User Name</label>
    <input required name="user_name" value="{{$soiltexture->user_name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter User Phone Number</label>
    <input required name="user_phone_number"  value="{{$soiltexture->user_phone_number}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter User Address</label>
    <input required name="user_address"  value="{{$soiltexture->user_address}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Choose the Soil Type</label>
    <input required name="soil_type" value="{{$soiltexture->soil_type}}"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input required name="image" value="{{$soiltexture->image}}" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection