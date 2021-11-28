@extends('admin.master')
@section('main')
<h1>Pesticide</h1>
<a href="{{route('pesticide.form')}}"class="btn btn-warning">Pesticide</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>

@endsection