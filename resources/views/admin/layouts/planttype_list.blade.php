@extends('admin.master')
@section('main')
<h1>Plant Type</h1>
<a href="{{route('planttype.form')}}" class="btn btn-warning">Plant Type</a>

<form action="{{route('admin.plant.type')}}">
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
      
      <th scope="col">Plant Details</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($planttype as $data)
    <tr>
      <th scope="row">{{$data->plant_name}}</th>
     
      <td>{{$data->plant_details}}</td>
      <td>
        <a class="btn btn-warning" href="{{route('admin.planttype.details',$data->id)}}">View</a>
        <a class="btn btn-warning" href="{{route('admin.planttype.delete',$data->id)}}">Delete</a>
      </td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection

