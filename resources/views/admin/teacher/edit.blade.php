<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
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
  <link rel="stylesheet" href="{{asset('admin')}}/node_modules/rickshaw/rickshaw.min.css" />
  <link rel="stylesheet" href="{{asset('admin')}}/bower_components/chartist/dist/chartist.min.css" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin')}}/css/style.css">
  
  <link rel="stylesheet" href="{{asset('')}}/css/toastr.min.css">
  
  
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('admin')}}/images/favicon.html" />
</head>
<body  >
  <!-- partial:partials/_settings-panel.html -->
  <div class="settings-panel ">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>
    <div class="tab-content" id="setting-content">
      <div class="tab-pane fade show active" id="layouts-section" role="tabpanel" aria-labelledby="layouts-tab">
        <div class="color-tiles">
          <div class="tiles primary" id="primary-theme"></div>
          <div class="tiles success" id="success-theme"></div>
          <div class="tiles warning" id="warning-theme"></div>
          <div class="tiles danger" id="danger-theme"></div>
          <div class="tiles pink" id="pink-theme"></div>
          <div class="tiles info" id="info-theme"></div>
          <div class="tiles dark" id="dark-theme"></div>
          <div class="tiles light" id="light-theme"></div>
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle btn-block mb-4" type="button" id="sidebar-color" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sidebar Mode
          </button>
          <div class="dropdown-menu" aria-labelledby="sidebar-color">
            <a class="dropdown-item" href="#" id="side-theme-light">Light</a>
            <a class="dropdown-item" href="#" id="side-theme-dark">Dark</a>
          </div>
        </div>
        <div class="dropdown d-none d-md-block">
          <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="Layouts-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Layouts
          </button>
          <div class="dropdown-menu" aria-labelledby="Layouts-type">
            <a class="dropdown-item" href="#" id="boxed-layout-view">Boxed</a>
            <a class="dropdown-item" href="#" id="compact-layout-view">Compact menu</a>
            <a class="dropdown-item" href="#" id="icon-only-layout-view">Icon Menu</a>
            <a class="dropdown-item" href="#" id="rtl-layout-view">RTL</a>
            <a class="dropdown-item" href="#" id="hidden-menu-1-layout-view">Hidden Menu 1</a>
            <a class="dropdown-item" href="#" id="hidden-menu-2-layout-view">Hidden Menu 2</a>
          </div>
        </div>
      </div>
      <!-- layout section tabends -->
      <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-tab">
        <ul class="chat-list">
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="ofline"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
        </ul>
      </div>
      <!-- chat section tabends -->
    </div>
  </div>
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light  col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper clearfix ">
        <a class="navbar-brand brand-logo " href="#">S-E-S</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center" >
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group d-none d-sm-block ">
          <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div>
        </form>
        <ul class="navbar-nav ml-lg-auto">
          
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-outline"></i>
              <span class="count bg-danger">4</span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown" >
              <a class="dropdown-item" href="{{route('admin.view')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">View Profile</p>
                  <p class="Sender-message"></p>
                </div>
              </a>
              <a class="dropdown-item" href="{{route('admin.settings')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">Settings</p>
                  <p class="Sender-message"></p>
                </div>
              </a>
              <a class="dropdown-item" href="{{route('admin.logout')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-primary">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">LogOut</p>
                  <p class="Sender-message"></p>
                </div>
              </a>
              
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas bg-info  " id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="{{asset('admin')}}/images/ash.jpg" alt="">
            </div>
            <div class="details ">
              <p class="user-name text-light">ASH</p>
              <p class="designation text-light">Developer</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('student.all')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title text-light">All Student</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('student.add')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title text-light">Add Student</span>
                <span class="badge badge-danger badge-pill ml-auto">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse"  href="#layoutsSubmenu"aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title text-light">Student Information</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item text-light">
                    <a class="nav-link text-light" href="{{route('student.tution')}}">TutionFee</a>
                  </li>
                  <li class="nav-item text-light">
                    <a class="nav-link text-light" href="{{route('student.result')}}">Result</a>
                  </li>
                </ul>
              </div> 
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title text-light">Courses</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item text-light">
                    <a class="nav-link text-light" href="{{route('student.cse')}}">C.S.E</a>
                  </li>
                  <li class="nav-item text-light">
                    <a class="nav-link text-light" href="{{route('student.bba')}}">B.B.A</a>
                  </li>
                  <li class="nav-item text-light">
                    <a class="nav-link text-light" href="{{route('student.llb')}}">L.L.B</a>
                  </li>
                  <li class="nav-item text-light">
                    <a class="nav-link text-light" href="{{route('student.eee')}}">E.E.E</a>
                  </li>
                  <li class="nav-item text-light">
                    <a class="nav-link text-light" href="{{route('student.english')}}">English</a>
                  </li>
                </ul>
              </div>
            </li>
            <!--main pages end-->
            <!--sample pages start-->
            
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('teacher.create')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title text-light">Add Teacher</span>
              </a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="{{route('teacher.index')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title text-light">All Teacher</span>
              </a>
            </li>
            <!--forms end-->
            <!--Apps start-->
            <li class="nav-item nav-category">
              <span class="nav-link taxt-light">Applications</span>
            </li>
            
            <!--Apps end-->
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth-pages">
          <div class="card col-lg-offset-3 col-lg-10  mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-center mb-3 ">Edit Teacher</h3>
              <form action="{{ route('teacher.update',['id'=>$teacher->id]) }}" method="post" enctype="multipart/form-data">
			        {{ csrf_field() }}
				
                 <div class="form-group">
                  <label>Name:</label>
                  <input type="text" class="form-control p_input" name="name" placeholder="name" value="{{$teacher->name}}">
                </div>
				
				<div class="form-group">
                  <label>email:</label>
                  <input type="email" class="form-control p_input" name="email" placeholder="email"  value="{{$teacher->email}}">
                </div>
				 
				 <div class="form-group">
                  <label>Img:</label>
                  <input type="file" class="form-control p_input" name="img" placeholder="image">
                </div>
				
				  <div class="form-group">
                  <label>Address:</label>
                  <input type="text" class="form-control p_input" name="address" placeholder="Address"  value="{{$teacher->address}}">
                </div>
				
                <div class="text-center">
                  <button type="submit" class="btn  text-white btn-success btn-lg">Update Teacher</button>
                </div>
                </div>
                </div>
				</div>
							
		   </div>	
		   </div>	
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">ASh</a> &copy; 2019
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
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
  <!-- Plugin js for this page-->
  <script src="{{asset('admin')}}/node_modules/flot/jquery.flot.js"></script>
  <script src="{{asset('admin')}}/node_modules/flot/jquery.flot.resize.js"></script>
  <script src="{{asset('admin')}}/node_modules/flot/jquery.flot.categories.js"></script>
  <script src="{{asset('admin')}}/node_modules/flot/jquery.flot.pie.js"></script>
  <script src="{{asset('admin')}}/node_modules/rickshaw/vendor/d3.v3.js"></script>
  <script src="{{asset('admin')}}/node_modules/rickshaw/rickshaw.min.js"></script>
  <script src="{{asset('admin')}}/bower_components/chartist/dist/chartist.min.js"></script>
  <script src="{{asset('admin')}}/node_modules/chartist-plugin-legend/chartist-plugin-legend.js"></script>
  <script src="{{asset('admin')}}/node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="{{asset('admin')}}/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('admin')}}/js/off-canvas.js"></script>
  <script src="{{asset('admin')}}/js/hoverable-collapse.js"></script>
  <script src="{{asset('admin')}}/js/misc.js"></script>
  <script src="{{asset('admin')}}/js/settings.js"></script>
  <script src="{{asset('admin')}}//node_modules/datatables.net/js/jquery.dataTables.js"></script>
  <script src="{{asset('admin')}}//node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="{{asset('admin')}}//js/data-table.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('admin')}}/js/dashboard_1.js"></script>
  <!-- End custom js for this page-->
  
  <script src="/js/app.js"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}")
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}")
        @endif
    </script>
    
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>


 