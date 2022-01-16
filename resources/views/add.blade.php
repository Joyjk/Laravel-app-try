@extends('layout')
@section('content')
<div class="col-sm-3" style="margin-left: 30%; margin-right: 30%">
    <form method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="name" >
          
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="email">
            
          </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Address</label>
          <input type="text" class="form-control" id="exampl" name="address">
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection