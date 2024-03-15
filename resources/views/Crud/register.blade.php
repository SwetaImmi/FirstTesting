
@extends('layout.app')
@section('message')
@section('nav')
<div class="container">
  <h2>Register form</h2>
  <form class="form-horizontal" action="{{url('register/post')}}" method="post">
    @csrf
    
  <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>
    <div class="form-group">        
    <label class="control-label col-sm-2" for="role">Role:</label>
      <div class="col-sm-10">          
        <!-- <input type="text" class="form-control" id="role" placeholder="Enter role" name="role"> -->
        <select type="text" class="form-control" id="role" placeholder="Enter role" name="role">
          <option>Select Type</option>
          <option>Admin</option>
          <option>User</option>
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
@endsection;







