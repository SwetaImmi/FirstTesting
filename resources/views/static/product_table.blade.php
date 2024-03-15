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
							<a href="product_form" class="btn btn-sm btn-info mt-1"><i class="feather-sm" data-feather="add"></i> Add New Product</a>

						</div>
				<?php
				}
			}
				?>


				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Categories</th>
							<th>Price</th>
							<th>Image</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>

						@foreach($product as $users)


						<tr>
							<td>{{$users->id }}</td>
							<td>{{$users->product_name}}</td>
							<td>{{$users->product_catogery}}</td>
							<td>{{$users->product_price}}</td>
							<td>
								@if($users->product_image)
								<img src="{{ asset('uploads/'.$users->product_image) }}" style="height: 50px;width:100px;">
								@else
								<span>No image found!</span>
								@endif
							</td>

							<td>
								<!-- <a href="{{ url('data_edit').'/'. $users->id }}" class="btn btn-info" role="button">Add Product</a> -->
								<a href="{{ url('update_product').'/'. $users->id  }}" class="btn btn-info" role="button">Update</a>
								<a onclick="return confirm('Are you sure?')" href="{{ url('data_delete').'/'. $users->id }}" class="btn btn-danger" role="button">Delete</a>
								<!-- <td><a href="{{URL::to('data_edit'. $users->id)}}" class="btn">Edit</a> -->
							</td>



						</tr>



						@endforeach

					</tbody>
				</table>
					</div>
		</main>

	</div>
</div>

@endsection;