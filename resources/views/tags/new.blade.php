@extends('layouts.admin')
<!-- Header -->
<div class="page-wrapper">
    <header class="main-header " id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg">
            <!-- Sidebar toggle button -->
            <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <!-- Search -->
            <div class="search" style="width:700px; margin-top: 20px;">
{{--                <form action="">--}}
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <div class="form-group">--}}
{{--                                                                        <select  class="form-control" id="clinicSearch" name="clinicSearch" >--}}
{{--                                                                            <option value="">Choose Clinic</option>--}}
{{--                                                                            @foreach($lsClinic as $clinic)--}}
{{--                                                                                <option value="{{$clinic->id}}" {{$clinic->id == $clinic_id ? 'selected' : ''}} >{{$clinic->name}}</option>--}}
{{--                                                                            @endforeach--}}
{{--                                                                        </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <div class="form-group ">--}}
{{--                                    <input type="text" class="form-control" placeholder="Enter Post's Name"--}}
{{--                                           name="nameSearch" id="nameSearch" value="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-2">--}}
{{--                                <div class="form-group ">--}}
{{--                                    <input type="submit" class="btn btn-primary" value="Tìm kiếm"/>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                </form>--}}
            </div>
            <!-- End search -->
            <div class="navbar-right" style="padding: 0; margin-left: 115px;">
                <ul class="nav navbar-nav">

                    <li class="dropdown user-menu">
                        <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"
                                style="padding:0!important">
                            <img src="{{asset('assets/img/user/user.png')}}" class="user-image" alt="User Image"/>
                            <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <!-- User image -->
                            <li class="dropdown-header">
                                <img src="{{asset('assets/img/user/user.png')}}" class="img-circle" alt="User Image"/>
                                <div class="d-inline-block">
                                    Abdus Salam <small class="pt-1">abdus@gmail.com</small>
                                </div>
                            </li>

                            <li>
                                <a href="profile.html">
                                    <i class="mdi mdi-account"></i> My Profile
                                </a>
                            </li>
                            <li>
                                <a href="email-inbox.html">
                                    <i class="mdi mdi-email"></i> Message
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                            </li>
                            <li>
                                <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                            </li>

                            <li class="dropdown-footer">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- search -->


    <!-- Data Table -->

    <div class="container">
        <form action="{{route('tag.store')}}" style="margin-top: 50px" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name"><b>Enter name</b></label>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="name" id="title" name="name" >
            </div>
            <input type="submit" value="Create new Tag">
        </form>
    </div>
</div>

{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>--}}
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
