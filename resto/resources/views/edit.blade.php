@extends ('layout')

@section ('content')

<div class="container">
<div class="col-sm-6">
<h1>Edit Restaurant</h1>


<form method="post" action="edit">
  @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="hidden" name="id" class="form-control" value="{{$data->id}}" placeholder="Enter Name">
    <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Enter Name">
    
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" value="{{$data->address}}" class="form-control" placeholder="Enter Address">
    
  </div>
  <div class="form-group">
    <label>E-mail</label>
    <input type="text" name="email" value="{{$data->email}}" class="form-control" placeholder="Enter email">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
</div>

@stop