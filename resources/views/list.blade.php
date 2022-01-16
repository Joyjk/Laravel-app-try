@extends('layout')
@section('content')
@if (Session::get("status"))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{Session::get("status")}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <h1 style="text-align: center">Restaurant List Page</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->address}}</td>
                    <td>
                      <a href="/delete/{{$item->id}}"><i class="fas fa-trash"></i></a> &nbsp; &nbsp; 
                      <a href="/edit/{{$item->id}}"><i class="far fa-edit"></i></a>
                    </td>
                    
                </tr>  
            @endforeach
          
          
        
        </tbody>
      </table>
  
@endsection