@extends('layout.app')
@section('nav')
<div class="container">
  <h2>Register form</h2>
  <form class="form-horizontal" action="{{ url('register/update').'/'. $user->id }}" method="post">
    @csrf
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">ID:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id" placeholder="Enter id" name="id" value="{{$user->id}}">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$user->name}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$user->email}}">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">      
       
        <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="password" value="{{$user->password}}">
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