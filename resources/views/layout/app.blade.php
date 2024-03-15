<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <title>Bootstrap Example</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  @if ($message = session('success'))
  <div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
  </div>
  @endif
  @if ($message = session('error'))
  <div class="alert alert-danger alert-block">
    <strong>{{ $message }}</strong>
  </div>
  @endif

  @yield('message')

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <!-- <a class="navbar-brand" href="#">WebSiteName</a> -->
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="/table">Home</a></li>
        <li><a href="/table">Dashboard</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/table">Add Product</a></li>
        <li><a href="/login">Product List</a></li>
        <?php if (Auth::check()) {
          if (Auth::user()->role == 'Admin') { // if the current role is Administrator
        ?>
            <li><a href="/register">Register</a></li>
        <?php
            // return view('Crud.home', ['user' => $user]);
            // return 1;
            // } elseif (Auth::user()->role == 'User') { // if the current role is User
            //   return view('Crud.home', ['user' => $user]);
          }
        }
        ?>


        <li> <a class="nav-link text-success btn btn-outline-success" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">

            @csrf
          </form>

        </li>
      </ul>

    </div>
  </nav>
  @yield('nav')

  @yield('message')
  <!-- <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in!
                    </div>
                @endif
            </div> -->





  <script>
    function confirmation() {
      var result = confirm("Are you sure to delete?");
      if (result) {
        // Delete logic goes here
      }
    }

    $("document").ready(function() {
      setTimeout(function() {
        $("div.alert").remove();
      }, 5000); // 5 secs

    });
  </script>
</body>

</html>