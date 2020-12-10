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
                <!-- search form -->


                <div class="navbar-right " style="margin-left: 780px;">
                    <ul class="nav navbar-nav">

                        <li class="dropdown user-menu">
                            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <img src="assets/img/user/user.png" class="user-image" alt="User Image"/>
                                <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- User image -->
                                <li class="dropdown-header">
                                    <img src="assets/img/user/user.png" class="img-circle" alt="User Image"/>
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
        <div class="search" style="margin-top: 40px">
                    <form action="">
                      <div class="container">
                        <div class="row">
                          
                          
                          <div class="col-md-3">
                            <div class="form-group ">
                              <label for="date">Ngày/Tháng/Năm</label>
                              <input type="date" class="form-control"  id="date" name="date" value="{{$date}}">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group ">
                              <label for="identity">Chứng minh nhân dân</label>
                              <input type="number" class="form-control" placeholder="Enter Identity" id="identity" name="identity" value="{{$identity}}">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group ">
                              <input type="submit" class="btn btn-primary" value="Tìm kiếm" style="margin-top:30px"/>
                            </div>
                          </div>

                        </div>
                      </div>

                    </form>
                  </div>
        <div class="container">
            
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th  class="header_table" style="width:15%">Name</th>
                    <th  class="header_table" style="width:15%">CMND</th>
                    <th  class="header_table" style="width:15%">Docter</th>
                    <th  class="header_table" style="width:15%">Clinic</th>
                    <th  class="header_table" style="width:15%">Time</th>
                    <th  class="header_table" style="width:10%">Date</th>
                    <th  class="header_table" style="width:10%">Status</th>
                    <th  class="header_table" style="width:3%">Action</th>
                   
                </tr>
                </thead>
                <tbody>
                @foreach($lsSchedule as $schedule)
                <tr>
                    <td>{{$schedule->name}}</td>
                    <td>{{$schedule->identity}}</td>
                    <td>{{$schedule->doctor->name}}</td>
                    <td>{{$schedule->clinic->name}}</td>
                    <td>{{$schedule->time}}</td>
                    <td>{{$schedule->date}}</td>
                    <td>{{$schedule->status}}</td>
                    <td><button type="button" data-id="{{$schedule->id}}" data-doctor="{{$schedule->doctor->name}}" data-phone="{{$schedule->phone}}" data-name="{{$schedule->name}}" data-identity="{{$schedule->identity}}" data-toggle="modal" data-target="#historyModalForm" ><span class="mdi mdi-book-open-variant btn-primary btn-style"></button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$lsSchedule->links("pagination::bootstrap-4")}}
        </div>
    </div>


    <!-- Modal form -->
    <div class="modal fade" id="historyModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content doctor">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalFormTitle">Lịch sử khám bệnh/h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('history.store')}}" method="post">
                      @csrf
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="name">Tên bệnh nhân</label>
                                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" readonly >
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                <label for="identity">Số chứng minh nhân dân</label>
                                <input type="number" class="form-control" id="identity" name="identity" readonly>
                              </div>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="phone">Điện thoại</label>
                                <input type="number" class="form-control" id="phone" name="phone" aria-describedby="emailHelp" readonly/>
                                <input type="number" class="form-control" id="id" name="id" hidden/>
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                <label for="doctor">Bác sĩ</label>
                                <input type="text" class="form-control" id="doctor" name="doctor" readonly>
                              </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="comment">Kết quả khám </label>
                          <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                          <span class="message" style="color:tomato"></span>
                        </div>
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" onclick="return validate()" >Submit</button>
                        </div>
                      </form>
                    </div>
                    
                  </div>
                </div>
              </div>
    


    </div>





    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/charts/Chart.min.js"></script>
    <script src="assets/js/chart.js"></script>
<script>
  function validate(){
    var comment = $('#comment').val();
    if(comment == ""){
      $('.message').html("Vui lòng nhập kêt quả khám bệnh");
      return false;
    }else{
      return true;
    }
  }
  var message = document.querySelector('.message');
  message.oninput = function(){
    $('.message').html("");
  };
  
</script>
<!-- Data modal to make history -->
<script type="text/javascript">
  $('#historyModalForm').on('show.bs.modal', function (event) {
      
      var button = $(event.relatedTarget)
      var name = button.data('name')
      var id = button.data('id')
      var identity = button.data('identity')
      var phone = button.data('phone')
      var doctor = button.data('doctor')
     
      var modal = $(this)

      modal.find('.modal-body #name').val(name)
      modal.find('.modal-body #id').val(id)
      modal.find('.modal-body #phone').val(phone)
      modal.find('.modal-body #identity').val(identity)
      modal.find('.modal-body #doctor').val(doctor)
    });
</script>
@endsection








