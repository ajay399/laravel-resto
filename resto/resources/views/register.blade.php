@extends ('layout')

@section ('content')

<div class="container">
<div class="col-sm-6">
<h1>Register Yourself</h1>

<form method="post" action="/register">
  @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter Name">
    
  </div>
  <div class="form-group">
    <label>E-mail</label>
    <input type="text" name="email" class="form-control" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="Password" name="password" class="form-control" placeholder="Enter Password">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
</div>

@stop