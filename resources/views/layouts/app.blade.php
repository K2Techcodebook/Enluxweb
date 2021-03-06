<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>@yield('title') - {{config('app.name')}}</title>
<meta name="description" content=" ">
<meta name="Author" content=" ">
<meta name="keywords" content=" " />
<meta name="author" content="metatags generator">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="3 days">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
	<!-- ==============================================
		Favicons
		=============================================== -->
		<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('source/assets/img/favicons/apple-touch-icon-57x57.html') }}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('source/assets/img/favicons/apple-touch-icon-114x114.html') }}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('source/assets/img/favicons/apple-touch-icon-72x72.html') }}">
		<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('source/assets/img/favicons/apple-touch-icon-144x144.html') }}">
		<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('_br/__b_Notice_/b__%20%20Array%20to%20string%20conversion%20in%20_b_/home/fluffsco/public_html/scripts/Voting/source/frontend/template/header.php_/b_%20on%20line%20_b_27_/b__/apple-touch-icon-60x60') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('source/assets/img/favicons/apple-touch-icon-120x120.html') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('source/assets/img/favicons/apple-touch-icon-76x76.html') }}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('source/assets/img/favicons/apple-touch-icon-152x152.html') }}">
		<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('source/assets/img/favicons/apple-touch-icon-180x180.html') }}">
		<link rel="icon" type="image/png" href="{{ asset('source/assets/img/favicons/favicon-96x96.html" sizes="96x96') }}">
		<link rel="icon" type="image/png" href="{{ asset('source/assets/img/favicons/favicon-16x16.html" sizes="16x16') }}">
		<link rel="icon" type="image/png" href="{{ asset('source/assets/img/favicons/favicon-32x32.html" sizes="32x32') }}">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="msapplication-TileImage" content="{{ asset('source/assets/img/favicons/mstile-144x144.html') }}">

	    <!-- ==============================================
		CSS
		=============================================== -->
        <!-- Style-->
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Ekko Lightbox -->
        <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

        <!-- Google Font: Source Sans Pro -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
<style>


</style>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div id="app">
      <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ url('/') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="#" class="nav-link">Contact</a>
            </li>
          </ul>

          <!-- SEARCH FORM -->
          {{-- <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form> --}}

          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                    <div class="media-body">
                      <h3 class="dropdown-item-title">
                        Brad Diesel
                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                      </h3>
                      <p class="text-sm">Call me whenever you can...</p>
                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                  </div>
                  <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                    <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                      <h3 class="dropdown-item-title">
                        John Pierce
                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                      </h3>
                      <p class="text-sm">I got your message bro</p>
                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                  </div>
                  <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                    <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                      <h3 class="dropdown-item-title">
                        Nora Silvester
                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                      </h3>
                      <p class="text-sm">The subject goes here</p>
                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                  </div>
                  <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
              </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> 4 new messages
                  <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-users mr-2"></i> 8 friend requests
                  <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-file mr-2"></i> 3 new reports
                  <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                  class="fas fa-th-large"></i></a>
            </li>
          </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="{{ url('/') }}" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">    {{ Auth::user()->name }}</a>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                {{-- <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v1</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./index2.html" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v2</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./{{ url('/') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Dashboard v3</p>
                      </a>
                    </li>
                  </ul>
                </li> --}}
                {{-- <li class="nav-item">
                  <a href="pages/widgets.html" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      Widgets
                      <span class="right badge badge-danger">New</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      Layout Options
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">6</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/layout/top-nav.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Top Navigation</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/layout/boxed.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Boxed</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Sidebar</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/layout/fixed-topnav.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Navbar</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/layout/fixed-footer.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Footer</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Collapsed Sidebar</p>
                      </a>
                    </li>
                  </ul>
                </li> --}}
                {{-- <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                      Charts
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/charts/chartjs.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>ChartJS</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/charts/flot.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Flot</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/charts/inline.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inline</p>
                      </a>
                    </li>
                  </ul>
                </li> --}}
                {{-- <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                      UI Elements
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/UI/general.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>General</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/UI/icons.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Icons</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/UI/buttons.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Buttons</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/UI/sliders.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Sliders</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/UI/modals.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Modals & Alerts</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/UI/navbar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Navbar & Tabs</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/UI/timeline.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Timeline</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/UI/ribbons.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Ribbons</p>
                      </a>
                    </li>
                  </ul>
                </li> --}}
                {{-- <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                      Forms
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/forms/general.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>General Elements</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/forms/advanced.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Advanced Elements</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/forms/editors.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Editors</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/forms/validation.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Validation</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                      Tables
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/tables/simple.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Simple Tables</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/tables/data.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>DataTables</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/tables/jsgrid.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>jsGrid</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                  <a href="pages/calendar.html" class="nav-link">
                    <i class="nav-icon fas fa-calendar-alt"></i>
                    <p>
                      Calendar
                      <span class="badge badge-info right">2</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/gallery.html" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      Gallery
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>
                      Mailbox
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/mailbox/mailbox.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inbox</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/mailbox/compose.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Compose</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/mailbox/read-mail.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Read</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                      Pages
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/examples/invoice.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Invoice</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/profile.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Profile</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/e_commerce.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>E-commerce</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/projects.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Projects</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/project_add.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Add</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/project_edit.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Edit</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/project_detail.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Project Detail</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/contacts.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contacts</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-plus-square"></i>
                    <p>
                      Extras
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/examples/login.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Login</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/register.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Register</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/forgot-password.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Forgot Password</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/recover-password.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Recover Password</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/lockscreen.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lockscreen</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Legacy User Menu</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/language-menu.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Language Menu</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/404.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Error 404</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/500.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Error 500</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/pace.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pace</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/examples/blank.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Blank Page</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="starter.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Starter Page</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-header">MISCELLANEOUS</li>
                <li class="nav-item">
                  <a href="https://adminlte.io/docs/3.0" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p>Documentation</p>
                  </a>
                </li>
                <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Level 1</p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-circle"></i>
                    <p>
                      Level 1
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Level 2</p>
                      </a>
                    </li>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          Level 2
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Level 3</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Level 3</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="far fa-dot-circle nav-icon"></i>
                            <p>Level 3</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Level 2</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Level 1</p>
                  </a>
                </li>

               --}}
               <li class="nav-header">LABELS</li>
               {{-- <li class="nav-item">
                 <a href="#" class="nav-link">
                   <i class="nav-icon far fa-circle text-danger"></i>
                   <p class="text">Important</p>
                 </a>
               </li> --}}
               <li class="nav-item">
                 <a href="{{ route('filesstore') }}" class="nav-link">
                   <i class="nav-icon far fa-circle text-warning"></i>
                   <p>Downloads</p>
                 </a>
               </li>
                <li class="nav-item">
                  <a class="nav-icon far fa-circle text-info" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                       {{-- <a class="dropdown-item" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                       <a class="dropdown-item" href="{{ route('ct') }}">{{ __('Create Vip Ticket') }}</a>
                  <a class="dropdown-item" href="{{ route('rg') }}">{{ __('Create Regular Ticket') }}</a> --}}
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </li>

              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <section class="content-header">
         <div class="container-fluid">
           <div class="row mb-2">
             <div class="col-sm-6">
               <h1>Gallery</h1>
             </div>
             <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                 <li class="breadcrumb-item"><a href="#">Home</a></li>
                 <li class="breadcrumb-item active">Gallery</li>
               </ol>
             </div>
           </div>
         </div><!-- /.container-fluid -->
       </section>
        @yield('content')


      </div>
     <!-- /.content-wrapper -->

	 <!-- ==============================================
	 Footer Section
	 =============================================== -->
   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
   </aside>
   <!-- /.control-sidebar -->

   <!-- Main Footer -->
   <footer class="main-footer">
     <strong>Copyright
     &copy; <?php
 $copyYear = 2019;
 $curYear = date('Y');
 echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
 ?> <a href="https://wristbands.ng/"> wristbands.NG</a>, Inc.  &mdash; All Rights Reserved</span>.</strong>
     <div class="float-right d-none d-sm-inline-block">
       <b>Version</b> 3.0.2-pre
     </div>
   </footer>
   </div>
   <!-- ./wrapper -->

   <!-- REQUIRED SCRIPTS -->
   <!-- jQuery -->
   <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
   <!-- Bootstrap -->
   <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <!-- jQuery UI -->
   <script src="{{ asset('../plugins/jquery-ui/jquery-ui.min.js') }}"></script>
   <!-- Ekko Lightbox -->
   <script src="{{ asset('../plugins/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
   <!-- overlayScrollbars -->
   <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('dist/js/adminlte.js') }}"></script>

   <!-- OPTIONAL SCRIPTS -->
   <script src="{{ asset('dist/js/demo.js') }}"></script>

   <!-- PAGE PLUGINS -->
   <!-- jQuery Mapael -->
   {{-- <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
   <script src="plugins/raphael/raphael.min.js"></script>
   <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
   <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script> --}}
   <!-- ChartJS -->
   <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

   <!-- PAGE SCRIPTS -->
   <script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
   <script type="text/javascript"></script>
     <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
 <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
 {!! Toastr::message() !!}
   @yield('javascript')
   </body>

   </html>
