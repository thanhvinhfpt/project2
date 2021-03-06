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

                <!-- End search -->
                <div class="navbar-right" style="padding: 0; margin-left: 1000px">
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
        <div class="col-md-10">
            <div class="row">
                <div class="container" style="margin-left:200px">
                    <form action="{{route('post.update',$post->id)}}" style="margin-top: 50px" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title"><b>Enter Title</b></label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Title" id="title" name="title"
                                        value="{{$post->title}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="author"><b>Enter Author</b></label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Author" id="author" name="author"
                                        value="{{$post->author}}">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="tag">Select Tag : </label>
                                    <select name="tag" id="tag" class="form-control">
                                        @foreach($lsTag as $tag)
                                            @if($tag->id == $post->tagId)
                                                <option value="{{$tag->id}}" selected>{{$tag->name}}</option>

                                            @else
                                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group " style="margin-right: 0">
                                    <label for="createdAt">Ngày cập nhật :</label>
                                    <input class="form-control" type="date" name="updatedAt" id="updatedAt" value="{{$post->updated_at}}">
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="coverImage">Cover Image</label>
                                    <input type="file" class="form-control" id="coverImage" name="coverImage"
                                        onchange="loadFile(event)"
                                        style="color:black; border: none;padding: 0;background-color: #f5f6fa">
                                    <span id="message_avata"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="" alt="" style="width:100px;" id="imageInsert">
                            </div>
                        </div>
                        <label for="ckeditor">Content : </label>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea class="ckeditor" rows="100" required name="body">{{$post->body}}</textarea>
                            </div>
                        </div>
                        <div class="container" style="height: 20px">

                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update Post">
                        </div>

                    </form>

                </div>
            </div>
        </div>

        {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>--}}
        <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


        <script>
            var loadFile = function (event) {
                var output = document.getElementById('imageInsert');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function () {
                    URL.revokeObjectURL(output.src);
                };
            };
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>


@endsection







