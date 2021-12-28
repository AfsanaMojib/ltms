@extends('admin.master')
@section('main')
<h1>Plants</h1>
<a href="{{route('plantname')}}"class="btn btn-danger">Plant Site</a>


<form action="{{route('admin.plant.name')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" name="search" placeholder="Search" arial-label="Search" aria-describedby="search-addon" />
    <!-- <label class="form-label" for="form1">Search</label> -->
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>

</form>




<table class="table">
  <thead>
    <tr>
      <th scope="col">Plant Name</th>
      <th scope="col">Plant ID</th>
      <th scope="col">Plant Type</th>
      <th scope="col">Plant Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($plant as $data)
    <tr>
      <th scope="row">{{$data->plant_name}}</th>
      <td>{{$data->plant_id}}</td>
      <td>{{$data->plant_type}}</td>
      <td>{{$data->plant_quantity}}</td>
      <td>
        <a class="btn btn-info" href="{{route('admin.plantname.details',$data->plant_id)}}">View</a>
      </td>
      <td>
      <a class="btn btn-info" href="{{route('admin.plantname.delete',$data->id)}}">Delete</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection