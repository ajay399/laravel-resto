@extends ('layout')

@section ('content')

<div class="container">
<h1>List of restaurant</h1>
@if(Session::get('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hey !</strong> {{Session::get('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif

@if(Session::get('delete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hey !</strong> Restaurant Deleted Successfully.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">E-Mail</th>
      <th scope="col" rowspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->email}}</td>
      <td>
        <a href="delete/{{$item->id}}"><button type="button" class="btn btn-outline-danger">Delete</button></a>
        <a href="edit/{{$item->id}}"><button type="button" class="btn btn-outline-success">Edit</button></a>

      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@stop