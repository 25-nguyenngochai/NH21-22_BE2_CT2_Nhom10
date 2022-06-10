<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>NH21-22_BE2_CT2_Nhom10</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/gritter/css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lineicons/style.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style-responsive.css')}}" rel="stylesheet">
    <script src="{{asset('assets/js/chart-master/Chart.js')}}"></script>

    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/table-responsive.css')}}" rel="stylesheet">

    <!--external css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/bootstrap-datepicker/css/datepicker.css')}}" />
    <link rel="stylesheet" type="text/css"
        href="{{asset('assets/js/bootstrap-daterangepicker/daterangepicker.css')}}" />
</head>

<body>

    <section id="container">
        <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>DASHGUM FREE</b></a>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="{{ route('logout_admin')}}">Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">

                    <p class="centered"><a href="profile.html"><img src="{{asset('assets/img/ui-sam.jpg')}}"
                                class="img-circle" width="60"></a></p>
                    @if (Auth::guard('admin')->check())
                    <h5 class="centered">
                        {{Auth::id()}}
                    </h5>
                    @endif
                    <li class="mt">
                        <a class="active" href="{{url('admin.index')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span>Data Tables</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{route('page_product')}}">Table Product</a></li>
                            <li><a href="{{route('page_catalog')}}">Table Catalog</a></li>
                            <li><a href="{{route('page_order')}}">Table Order</a></li>
                            <li><a href="{{route('page_comment')}}">Table Comment</a></li>
                            <li><a href="{{route('page_user')}}">Table User</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        @yield('content')