@extends('layout.app')
@section('message')
@section('nav')

<div class="container">
  <!-- <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>             -->
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

      @foreach($user as $users)


      <tr>
        <td>{{$users->id}}</td>
        <td>{{$users->name}}</td>
        <td>{{$users->email}}</td>
        <?php
        if (Auth::check()) {
          if (Auth::user()->role == 'Admin') { // if the current role is Administrator
        ?>
            <td>
              <a href="{{ url('data_edit').'/'. $users->id }}" class="btn btn-info" role="button">Add Product</a>
              <a href="{{ url('data_edit').'/'. $users->id }}" class="btn btn-info" role="button">Update</a>
              <a onclick="confirmation()" href="{{ url('data_delete').'/'. $users->id }}" class="btn btn-danger" role="button">Delete</a>
              <!-- <td><a href="{{URL::to('data_edit'. $users->id)}}" class="btn">Edit</a> -->
            </td>
          <?php
          } elseif (Auth::user()->role == 'User') { // if the current role is User
          ?>
            <td>
              <a href="{{ url('data_edit').'/'. $users->id }}" class="btn btn-info" role="button" disabled>Update</a>
              <a onclick="confirmation()" href="{{ url('data_delete').'/'. $users->id }}" class="btn btn-danger" role="button" disabled>Delete</a>
              <!-- <td><a href="{{URL::to('data_edit'. $users->id)}}" class="btn">Edit</a> -->
            </td>
        <?php
          }
        }
        ?>

      </tr>



      @endforeach

    </tbody>
  </table>
</div>



@endSection