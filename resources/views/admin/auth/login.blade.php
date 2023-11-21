<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login - The Angel School System</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
 
      
      <!-- Main Content -->
      <div class=" ">
        <section class="section">
            <div class="container mt-5 pt-2">
              <div class="row">
                <div class="col-12 my-md-0 my-5 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                  <div class="card" id="sample-login">
                    <form action="{{route('login')}}" method="post">
                    {!! csrf_field() !!}
                      <div class="card-header login-logo pt-5">
                       <h6 class="text-center text-dark">Welcome to <br> THE ANGELS SCHOOL SYSTEM <br> (Khan Garh)</h6>
                      </div>
                      <h6 class="text-center text-dark">Login Page</h6>

                        <div class="card-body">
                            <div class="form-group my-2">
                                <label>Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    </div>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group my-1">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    </div>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="my-2 text-right">
                                <a href="#" class=" ">Forget Password</a>
                            </div>
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                                </div>
                            </div>
                        </div>
                      <div class="card-footer  text-center">
                        <button type="submit" class="btn btn-primary px-5 " id="login">
                            Login
                        </button>

                        <div class="my-2 text-center">
                                <a href="{{route('register')}}" class=" ">Register</a>
                        </div>
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>  
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
</html>