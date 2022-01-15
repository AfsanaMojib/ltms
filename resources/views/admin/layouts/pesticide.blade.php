@extends('admin.master')
@section('main')
<h1>Pesticide</h1>
<a href="{{route('pesticide.form')}}"class="btn btn-warning">Pesticide</a>

<!-- search -->
<form action="{{route('admin.pesticide.list')}}">
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

<!-- end search -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Pesticide Name</th>
      <th scope="col">Pesticide Type</th>
      <th scope="col">Pesticide Details</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($pesticide as $data)
<tr>
      <th scope="row">{{$data->pesticide_name}}</th>
      <td>{{$data->pesticide_type}}</td>
      <td>{{$data->pesticide_details}}</td>
      <td>{{$data->pesticide_price}}</td>
      <td>
      <a class="btn btn-warning" href="{{route('admin.pesticide.details',$data->id)}}">View</a>
    <a class="btn btn-warning" href="{{route('admin.pesticide.delete',$data->id)}}">Delete</a>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection