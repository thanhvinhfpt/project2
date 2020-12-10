

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Sleek - Admin Dashboard Template</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{asset('assets/css/sleek.css')}}" />
   


    <!-- FAVICON -->
    <link href="{{asset('assets/css/sleek.css')}}" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('assets/plugins/nprogress/nprogress.js')}}"></script>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>

<div class="mobile-sticky-body-overlay"></div>

<div class="wrapper">

    <!--
====================================
——— LEFT SIDEBAR WITH FOOTER
=====================================
-->
    <aside class="left-sidebar bg-sidebar">
        <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
                <a href="../index.html">
                    <svg
                        class="brand-icon"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid"
                        width="30"
                        height="33"
                        viewBox="0 0 30 33"
                    >
                        <g fill="none" fill-rule="evenodd">
                            <path
                                class="logo-fill-blue"
                                fill="#7DBCFF"
                                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                            />
                            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                        </g>
                    </svg>
                    <span class="brand-name">Sleek Dashboard</span>
                </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

                <!-- sidebar menu -->
                @if(Auth::check())
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        @if(Auth::user()->role_name == 'ADMIN')
                            <li  class="has-sub active expand" >
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                                   aria-expanded="false" aria-controls="dashboard">
                                    <a class="sidenav-item-link" href="{{route('dashboards.index')}}">
                                        <i class="mdi mdi-view-dashboard-outline"></i>
                                        <span class="nav-text">Dashboard</span>
                                    </a>
                                </a>

                            </li>
                            <li  class="has-sub" >
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                                   aria-expanded="false" aria-controls="ui-elements">
                                    <i class="mdi mdi-folder-multiple-outline"></i>
                                    <span class="nav-text">Administration</span> <b class="caret"></b>
                                </a>
                                <ul  class="collapse"  id="ui-elements"
                                     data-parent="#sidebar-menu">
                                    <div class="sub-menu">


                                        <li  class="has-sub" >
                                            <a class="sidenav-item-link" href="{{route('users.index')}}">
                                                <span class="nav-text">Users</span>
                                            </a>
                                            </a>
                                        </li>

                                        <li  class="has-sub" >
                                            <a class="sidenav-item-link" href="{{route('doctors.index')}}">
                                                <span class="nav-text">Doctors</span>
                                            </a>
                                            </a>
                                        </li>
                                        <li  class="has-sub" >
                                            <a class="sidenav-item-link" href="{{route('services.index')}}">
                                                <span class="nav-text">Healthcare Services</span>
                                            </a>
                                            </a>
                                        </li>

                                        <li  class="has-sub" >
                                            <a class="sidenav-item-link" href="{{route('post.index')}}">
                                                <span class="nav-text">Post</span>
                                            </a>
                                            </a>
                                        </li>
                                        <li  class="has-sub" >
                                            <a class="sidenav-item-link" href="{{route('tag.index')}}">
                                                <span class="nav-text">Tag</span>
                                            </a>
                                            </a>
                                        </li>

                                    </div>
                                </ul>
                            </li>
                            <li  class="has-sub" >
                                <a class="sidenav-item-link" href="{{route('schedules.index')}}">
                                    <i class="mdi mdi-chart-pie"></i>
                                    <span class="nav-text">Examination Schedule</span>
                                </a>
                                </a>
                            </li>
                            <li  class="has-sub" >
                                <a class="sidenav-item-link" href="{{route('history.index')}}">
                                    <i class="mdi mdi-book-open-variant"></i>
                                    <span class="nav-text">History Examination</span>
                                </a>
                                </a>
                            </li>
                        @endif
                        @if(Auth::user()->role_name == 'EMPLOYEE')
                            <li  class="has-sub" >
                                <a class="sidenav-item-link" href="{{route('employees.index')}}">
                                    <i class="mdi mdi-chart-pie"></i>
                                    <span class="nav-text">Examination Schedule</span>
                                </a>
                                </a>
                            </li>
                            <li  class="has-sub" >
                                <a class="sidenav-item-link" href="{{route('history.index')}}">
                                
                                    <i class="mdi mdi-book-open-variant"></i>
                                    <span class="nav-text">History Examination</span>
                                </a>
                                </a>
                            </li>
                        @endif
                    </ul>
                @endif


            </div>
        </div>
    </aside>
    @yield('content')



<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('assets/plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart.js')}}"></script>
<script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>

</body>
</html>
