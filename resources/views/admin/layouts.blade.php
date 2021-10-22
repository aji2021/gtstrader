<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Laravel </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="/assets/dist/css/skins/_all-skins.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">
	<header class="main-header">
	    <a href="index2.html" class="logo">
	      <span class="logo-mini"><b>GTS</b></span>
	      <span class="logo-lg"><b>GTS</b></span>
	    </a>

	    <nav class="navbar navbar-static-top">
	      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
	        <span class="sr-only">Toggle navigation</span>
	      </a>

	      <div class="navbar-custom-menu">
	        <ul class="nav navbar-nav">
	          <li class="dropdown notifications-menu">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <i class="fa fa-bell-o"></i>
	              <span class="label label-danger">10</span>
	            </a>
	            <ul class="dropdown-menu">
	              <li class="header">You have 10 notifications</li>
	              <li>
	                <ul class="menu">
	                  <li>
	                    <a href="#">
	                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
	                    </a>
	                  </li>
	                </ul>
	              </li>
	              <li class="footer"><a href="#">View all</a></li>
	            </ul>
	          </li>

	          <li class="dropdown user user-menu">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <img src="/assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
	              <span class="hidden-xs">{{ Auth::user()->nama }}</span>
	            </a>
	            <ul class="dropdown-menu">
	              <li class="user-header">
	                <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

	                <p>
	                  {{ Auth::user()->nama }}
	                  <small>Member since Nov. 2012</small>
	                </p>
	              </li>
	              <li class="user-footer">
	                <div class="pull-left">
	                  <a href="#" class="btn btn-default btn-flat">Profile</a>
	                </div>
	                <div class="pull-right">
	                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
	                        {{ __('Logout') }}
	                    </a>

	                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                        @csrf
	                    </form>
	                </div>
	              </li>
	            </ul>
	          </li>
	        </ul>
	      </div>
	    </nav>
	</header>

	<aside class="main-sidebar">
		<section class="sidebar">
		  <div class="user-panel">
		    <div class="pull-left image">
		      <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
		    </div>
		    <div class="pull-left info">
		      <p>{{ Auth::user()->nama }}</p>
		      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		    </div>
		  </div>
		  <ul class="sidebar-menu">
		    <li class="header">MAIN NAVIGATION</li>
		    <li>
		      <a href="/admin/dashboard">
		        <i class="fa fa-th"></i> <span>Dashboard</span>
		      </a>
		    </li>
		    <li>
		      <a href="/admin/member_baru">
		        <i class="fa fa-user-plus"></i> <span>Member</span>
		        <span class="pull-right-container">
		          <small class="label pull-right bg-red">new</small>
		        </span>
		      </a>
		    </li>
		    <li class="treeview">
		      <a href="">
		        <i class="fa fa-users"></i> <span>Member</span>
		        <span class="pull-right-container">
		          <i class="fa fa-angle-left pull-right"></i>
		        </span>
		      </a>
		      <ul class="treeview-menu">
		        	<li><a href="/admin/member/approve"><i class="fa fa-circle-o"></i> Approve </a></li>
		        	<li><a href="/admin/member/reject"><i class="fa fa-circle-o"></i> Reject </a></li>
		      </ul>
		    </li>
            <li>
              <a href="/admin/transaksi/deposit">
                <i class="fa fa-user"></i> <span>Transaksi</span>
              </a>
            </li>
		    <li>
		      <a href="/admin/user">
		        <i class="fa fa-user"></i> <span>User Admin</span>
		      </a>
		    </li>
		  </ul>
		</section>
	</aside>

	<div class="content-wrapper">
			@yield('content')
	</div>

  	<footer class="main-footer">
		<strong>Copyright &copy; 2021 GTS</strong>
	</footer>

  <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 2.2.3 -->
<script src="/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
</body>
</html>
