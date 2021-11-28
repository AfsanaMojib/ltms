@extends('admin.master')
@section('main')

<h1>Picture</h1>
<a href="{{route('picture.form')}}" class="btn btn-info">Picture</a>
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection