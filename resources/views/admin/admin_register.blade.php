@include('includes.errors')
@include('includes.app')


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Encrollment System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin')}}/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{asset('admin')}}/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('admin')}}/node_modules/font-awesome/css/font-awesome.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin')}}/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin')}}/images/favicon.html" />
</head>

<body class="sidebar-lite">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Register</h3>
              <form action="{{ route('admin.store') }}" method="post">
			        {{ csrf_field() }}
				
                 <div class="form-group">
                  <label>Name:</label>
                  <input type="text" class="form-control p_input" name="admin_name" placeholder="name">
                </div>
				
                <div class="form-group">
                  <label> Email: </label>
                  <input type="email" class="form-control p_input" name="admin_email" placeholder="email">
                </div>
                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" class="form-control p_input" name="admin_password" placeholder="password">
                </div>
				 <div class="form-group">
                  <label>Phone:</label>
                  <input type="text" class="form-control p_input" name="admin_phone" placeholder="phone">
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="icheck-square">
                    <input tabindex="1" type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                  </div>
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
                </div>
                <div class="d-flex justify-content-center mb-4">
                  <a href="#" class="facebook-login btn btn-facebook mr-2">Facebook</a>
                  <a href="#" class="google-login btn btn-google">Google+</a>
                </div>
                
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('admin')}}/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="{{asset('admin')}}/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="{{asset('admin')}}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="{{asset('admin')}}/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('admin')}}/js/off-canvas.js"></script>
  <script src="{{asset('admin')}}/js/hoverable-collapse.js"></script>
  <script src="{{asset('admin')}}/js/misc.js"></script>
  <script src="{{asset('admin')}}/js/settings.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/pages/samples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:33:56 GMT -->
</html>