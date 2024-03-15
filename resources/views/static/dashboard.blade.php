@extends('layout.app-ui')

@section('bottom')


<div class="wrapper">

	@section('nav')


	<div class="main">


		<main class="content">
		<?php if (Auth::check()) {
                        if (Auth::user()->role == 'Admin') { // if the current role is Administrator
                    ?>

			<div class="container">
				<div class="d-flex align-items-start">
					<a href="signin" class="btn btn-sm btn-info mt-1"><i class="feather-sm" data-feather="add"></i> Create New User</a>

				</div>

				<?php
						}
					}
					?>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Email</th>
							<th>Role</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>

						@foreach($user as $users)


						<tr>
							<td>{{$users->id}}</td>
							<td>{{$users->name}}</td>
							<td>{{$users->email}}</td>
							<td>{{$users->role}}</td>
							<?php
							if (Auth::check()) {
								if (Auth::user()->role == 'Admin') { // if the current role is Administrator
							?>
									<td>
										<a href="product_form" class="btn btn-info" role="button">Add Product</a>
										<a href="{{ url('data_edit').'/'. $users->id }}" class="btn btn-info" role="button">Update</a>
										<a  onclick="return confirm('Are you sure?')" href="{{ url('data_deletes').'/'. $users->id }}" class="btn btn-danger" role="button">Delete</a>
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
								} else {
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
		</main>

	</div>
</div>

@endsection;