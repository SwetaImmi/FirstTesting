@extends('layout.app-ui')

@section('bottom')
<div class="wrapper">

	@section('nav')

	<div class="main">
		<nav class="navbar navbar-expand navbar-light navbar-bg">
			<a class="sidebar-toggle js-sidebar-toggle">
				<i class="hamburger align-self-center"></i>
			</a>

			<div class="navbar-collapse collapse">
				<ul class="navbar-nav navbar-align">
					<li class="nav-item dropdown">
						<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
							<div class="position-relative">
								<i class="align-middle" data-feather="bell"></i>
								<span class="indicator">4</span>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
							<div class="dropdown-menu-header">
								4 New Notifications
							</div>
							<div class="list-group">
								<a href="#" class="list-group-item">
									<div class="row g-0 align-items-center">
										<div class="col-2">
											<i class="text-danger" data-feather="alert-circle"></i>
										</div>
										<div class="col-10">
											<div class="text-dark">Update completed</div>
											<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
											<div class="text-muted small mt-1">30m ago</div>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item">
									<div class="row g-0 align-items-center">
										<div class="col-2">
											<i class="text-warning" data-feather="bell"></i>
										</div>
										<div class="col-10">
											<div class="text-dark">Lorem ipsum</div>
											<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
											<div class="text-muted small mt-1">2h ago</div>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item">
									<div class="row g-0 align-items-center">
										<div class="col-2">
											<i class="text-primary" data-feather="home"></i>
										</div>
										<div class="col-10">
											<div class="text-dark">Login from 192.186.1.8</div>
											<div class="text-muted small mt-1">5h ago</div>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item">
									<div class="row g-0 align-items-center">
										<div class="col-2">
											<i class="text-success" data-feather="user-plus"></i>
										</div>
										<div class="col-10">
											<div class="text-dark">New connection</div>
											<div class="text-muted small mt-1">Christina accepted your request.</div>
											<div class="text-muted small mt-1">14h ago</div>
										</div>
									</div>
								</a>
							</div>
							<div class="dropdown-menu-footer">
								<a href="#" class="text-muted">Show all notifications</a>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
							<div class="position-relative">
								<i class="align-middle" data-feather="message-square"></i>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
							<div class="dropdown-menu-header">
								<div class="position-relative">
									4 New Messages
								</div>
							</div>
							<div class="list-group">
								<a href="#" class="list-group-item">
									<div class="row g-0 align-items-center">
										<div class="col-2">
											<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
										</div>
										<div class="col-10 ps-2">
											<div class="text-dark">Vanessa Tucker</div>
											<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
											<div class="text-muted small mt-1">15m ago</div>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item">
									<div class="row g-0 align-items-center">
										<div class="col-2">
											<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
										</div>
										<div class="col-10 ps-2">
											<div class="text-dark">William Harris</div>
											<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
											<div class="text-muted small mt-1">2h ago</div>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item">
									<div class="row g-0 align-items-center">
										<div class="col-2">
											<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
										</div>
										<div class="col-10 ps-2">
											<div class="text-dark">Christina Mason</div>
											<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
											<div class="text-muted small mt-1">4h ago</div>
										</div>
									</div>
								</a>
								<a href="#" class="list-group-item">
									<div class="row g-0 align-items-center">
										<div class="col-2">
											<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
										</div>
										<div class="col-10 ps-2">
											<div class="text-dark">Sharon Lessman</div>
											<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
											<div class="text-muted small mt-1">5h ago</div>
										</div>
									</div>
								</a>
							</div>
							<div class="dropdown-menu-footer">
								<a href="#" class="text-muted">Show all messages</a>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
							<i class="align-middle" data-feather="settings"></i>
						</a>

						<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
							<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
							<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
							<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Log out</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>

		<main class="content">
			<div class="container-fluid p-0">

				<div class="mb-3">
					<h1 class="h3 d-inline align-middle">Chart.js</h1>
					<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
						Get more chart examples
					</a>
				</div>
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="card flex-fill w-100">
							<div class="card-header">
								<h5 class="card-title">Line Chart</h5>
								<h6 class="card-subtitle text-@extends('layout.app-ui')

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

@endsection;muted">A line chart is a way of plotting data points on a line.</h6>
							</div>
							<div class="card-body">
								<div class="chart">
									<canvas id="chartjs-line"></canvas>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-lg-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Bar Chart</h5>
								<h6 class="card-subtitle text-muted">A bar chart provides a way of showing data values represented as vertical bars.</h6>
							</div>
							<div class="card-body">
								<div class="chart">
									<canvas id="chartjs-bar"></canvas>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-lg-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Doughnut Chart</h5>
								<h6 class="card-subtitle text-muted">Doughnut charts are excellent at showing the relational proportions between data.</h6>
							</div>
							<div class="card-body">
								<div class="chart chart-sm">
									<canvas id="chartjs-doughnut"></canvas>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-lg-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Pie Chart</h5>
								<h6 class="card-subtitle text-muted">Pie charts are excellent at showing the relational proportions between data.</h6>
							</div>
							<div class="card-body">
								<div class="chart chart-sm">
									<canvas id="chartjs-pie"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</main>

		<footer class="footer">
			<div class="container-fluid">
				<div class="row text-muted">
					<div class="col-6 text-start">
						<p class="mb-0">
							<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a> &copy;
						</p>
					</div>
					<div class="col-6 text-end">
						<ul class="list-inline">
							<li class="list-inline-item">
								<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
							</li>
							<li class="list-inline-item">
								<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
							</li>
							<li class="list-inline-item">
								<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
							</li>
							<li class="list-inline-item">
								<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>
@endsection;