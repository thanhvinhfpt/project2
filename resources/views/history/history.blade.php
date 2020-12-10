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
                      <div class="search-form d-none d-lg-inline-block">
                        <div class="input-group">
                          <form action="" class="search_username">

                              <input type="text" value="{{$identity}}" name="searchIdentity" id="search" class="form-control" placeholder="Enter Identity" style="border-bottom: 1px solid;"/>

                              <button type="submit"  class="btn ">
                                <i class="mdi mdi-magnify"></i>
                              </button>
                          </form>
                        </div>
                        <div id="search-results-container">
                          <ul id="search-results"></ul>
                        </div>
                      </div>


                      <div class="navbar-right " >
                        <ul class="nav navbar-nav">

                          <li class="dropdown user-menu">
                            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                              <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                              <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <!-- User image -->
                              <li class="dropdown-header">
                                <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
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



                  <!-- table data -->

                  <div class="container" style="margin-top:50px">

                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th  class="header_table" style="width:7%">STT</th>
                          <th  class="header_table" style="width:20%">Name</th>
                          <th  class="header_table" style="width:20%">Phone</th>
                          <th  class="header_table" style="width:20%">Identity</th>
                          <th  class="header_table" style="width:20%">Doctor</th>
                          
                          <th  class="header_table" style="width:7%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($lsHistory as $history)
                        <tr>
                          <td>{{ $loop->index + 1}}</td>
                          <td>{{$history->name}}</td>
                          <td>{{$history->phone}}</td>
                          <td>{{$history->CMND}}</td>
                          <td>{{$history->doctor}}</td>
                          <td><button type="button" data-time="{{$history->created_at->format('h:i:s')}}" data-date="{{$history->created_at->format('d-m-Y')}}" data-diagnostic="{{$history->diagnostic}}" data-phone="{{$history->phone}}" data-name="{{$history->name}}" data-doctor="{{$history->doctor}}" data-email="{{$history->email}}" data-identity="{{$history->CMND}}" data-toggle="modal" data-target="#exampleModalForm" ><span class="mdi mdi-pencil btn-primary btn-style"></button></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>


              <!-- Modal form edit-->
              <div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content doctor">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalFormTitle">Examination Result</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form >
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <h2 for="usernameEdit" style="font-size:26px; text-align:center;font-weight:600">Bệnh viện đa khoa quốc tế Thu Cúc</h2>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group" style="margin-left:140px" >
                              <label >Ngày khám: <span id="date"></span></label></br>
                              <label >Giờ khám: <span id="time"></span></label>                     
                            </div>
                          </div>
                        </div>
                        <div class="row" >
                         <span id="exam">PHIẾU KẾT QUẢ XÉT NGHIỆM</span>
                         </div>
                         
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label><span style="font-weight:600">Tên bệnh nhân: </span><span id="name"></span></label></br>
                                <label ><span style="font-weight:600">Số điện thoại: </span> <span id="phone"></span> </label></br>
                                <label><span style="font-weight:600">Số chứng minh nhân dân: </span> <span id="identity"></span></label></br>
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="passwordEdit"><span style="font-weight:600;font-size:22px">Kết quả chuẩn đoán </span></label></br>
                                <label ><span id="diagnostic"></span></label>
                              </div>
                            </div>
                        </div>
                        <div style="float:right;margin-right:20px">
                            <p style="margin-bottom:20px; font-size:20px;font-weight:600" name="" id="" >Bác sĩ điều trị</p>
                            <p name=""  ><span id="doctor"></span></p>
                        </div>

                      </form>
                    </div>
                    
                  </div>
                </div>
              </div>

              <!-- Modal form insert-->
              
              <!-- Form confirm -->
           
      </div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>


<script type="text/javascript">
  $('#exampleModalForm').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget)
      var name = button.data('name')
      var phone = button.data('phone')
      var identity = button.data('identity')
      var diagnostic = button.data('diagnostic')
      var doctor = button.data('doctor')
      var date = button.data('date')
      var time = button.data('time')
      var modal = $(this)
      $('#name').html(name);
      $('#phone').html(phone);
      $('#identity').html(identity);
      $('#diagnostic').html(diagnostic)
      $('#doctor').html(doctor);
      $('#date').html(date);
      $('#time').html(time);
    });
</script>


@endsection