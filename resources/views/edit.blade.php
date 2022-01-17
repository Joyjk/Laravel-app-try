@extends('layout')
@section('content')
<form method="POST" action="/edit">
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->name}}" name="name" >
      
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->email}}" name="email">
        
      </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Address</label>
      <input type="text" class="form-control" id="exampl" value="{{$data->address}}" name="address">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection