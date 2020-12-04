@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <!-- Header -->
        <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
                <!-- Sidebar toggle button -->
                <button id="sidebar-toggler" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <!-- Search -->
                <div class="search" style="width:700px; margin-top: 20px;">
                    <form action="">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{--                                    <select  class="form-control" id="clinicSearch" name="clinicSearch" >--}}
                                        {{--                                        <option value="">Choose Clinic</option>--}}
                                        {{--                                        @foreach($lsClinic as $clinic)--}}
                                        {{--                                            <option value="{{$clinic->id}}" {{$clinic->id == $clinic_id ? 'selected' : ''}} >{{$clinic->name}}</option>--}}
                                        {{--                                        @endforeach--}}
                                        {{--                                    </select>--}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">
                                        <input type="text" class="form-control" placeholder="Enter Post's Name"
                                               name="nameSearch" id="nameSearch" value="">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group ">
                                        <input type="submit" class="btn btn-primary" value="Tìm kiếm"/>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>
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
                                    <img src="{{asset('assets/img/user/user.png')}}" class="img-circle"
                                         alt="User Image"/>
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
        <span><a href="{{route('post.create')}}" class="btn btn-primary"
                 style="float: right;  margin: 30px 16px 20px 0 ;color: white">Add New Post</a></span>
        <div class="container">

            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th class="header_table" style="width:7%">ID</th>
                    <th class="header_table" style="width:7%">Cover</th>
                    <th class="header_table" style="width:15%">Title</th>
                    <th class="header_table" style="width:10%">Tag</th>
                    <th class="header_table" style="width:10%">Author</th>
                    <th class="header_table" style="width:10%">Created at</th>
                    <th class="header_table" style="width:7%">Action</th>
                    <th class="header_table" style="width:7%">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lsPost as $post)
                    <tr>

                        <td>{{$post->id}}</td>
                        <td><img src="{{$post->coverImage}}" height="30px" width="50px" alt="cover Image"></td>
                        <td>{{$post->title}}</td>
                        <td>
                            @foreach($lsTag as $tag)
                                @if($post->tag_id == $tag->id)
                                    {{$tag ->name}}
                                @endif
                            @endforeach

                        </td>
                        <td>{{$post->author}}</td>
                        <td>{{ date('d/m/Y H:i:s', strtotime($post->created_at) ) }}</td>
                        <td>
                            <a href="{{route('post.edit', $post->id)}}"><span
                                    class="mdi mdi-pencil btn-primary btn-style" style="margin-bottom: 10px"></span></a>
                        </td>
                        <td>
                            <form action="{{route('post.destroy', $post->id)}}" method="POST" style="margin-top:-10px">
                                    @csrf
                                    @method('Delete')
                                    <button type="submit" class="button_delete"><span
                                            class="mdi mdi-delete btn-danger btn-style"></span></button>
                                </form>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
                            {{$lsPost->links("pagination::bootstrap-4")}}
        </div>
    </div>

    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>--}}
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


@endsection

