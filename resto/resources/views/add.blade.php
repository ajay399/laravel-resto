@extends ('layout')

@section ('content')

<div class="container">
<div class="col-sm-6">
<h1>Add New Restaurant</h1>

<form method="post" action="/add">
  @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter Name">
    
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" placeholder="Enter Address">
    
  </div>
  <div class="form-group">
    <label>E-mail</label>
    <input type="text" name="email" class="form-control" placeholder="Enter email">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
</div>

@stop