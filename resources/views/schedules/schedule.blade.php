<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Table - Sleek Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />



  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
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
              <a href="/index.html">
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
                          <span class="nav-text">Posts</span>
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

                  @endif
                  @if(Auth::user()->role_name == 'EMPLOYEE')
                  <li  class="has-sub" >
                      <a class="sidenav-item-link" href="{{route('employees.index')}}">
                        <i class="mdi mdi-chart-pie"></i>
                        <span class="nav-text" style="color: white;">Examination Schedule</span>
                      </a>
                    </a>
                  </li>
                  @endif
              </ul>
              @endif

            </div>
          </div>
        </aside>




        <div class="page-wrapper">
                  <!-- Header -->
                  <header class="main-header " id="header">
                    <nav class="navbar navbar-static-top navbar-expand-lg">
                      <!-- Sidebar toggle button -->
                      <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                      </button>



                      <div class="navbar-right " style="margin-left: 780px;">
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
                  <div class="search" style="margin-top: 40px">
                    <form action="">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-2">
                            <div class="form-group">
                              <label for="clinic">Clinic</label>
                              <select  class="form-control" id="clinic" name="clinic" >
                                <option value="">Choose Clinic</option>
                                  @foreach($lsClinic as $clinic)
                                    <option value="{{$clinic->id}}" {{$clinic->id == $clinic_id ? 'selected' : ''}} >{{$clinic->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group ">
                              <label for="doctor">Doctor</label>
                              <select  class="form-control" id="doctor" name="doctor" >
                                <option value="">Choose Doctor</option>
                                  @foreach($lsDoctor as $doctor)
                                    <option value="{{$doctor->id}}" {{$doctor->id == $doctor_id ? 'selected' : ''}}  >{{$doctor->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group ">
                              <label for="date">Day/Month/Year</label>
                              <input type="date" class="form-control"  id="date" name="date" value="{{$date}}">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group ">
                              <label for="identity">Identity</label>
                              <input type="number" class="form-control" placeholder="Enter Identity" id="identity" name="identity">
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
                          <th  class="header_table" style="width:3%">Action</th>
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
                          <td><button type="button" data-id="{{$schedule->id}}" data-doctor="{{$schedule->doctor->name}}" data-phone="{{$schedule->phone}}" data-name="{{$schedule->name}}" data-identity="{{$schedule->identity}}" data-toggle="modal" data-target="#historyModalForm" >Close</button></td>
                          <td><button type="button" data-clinic_id="{{$schedule->clinic_id}}" data-id="{{$schedule->id}}" data-doctor_id="{{$schedule->doctor_id}}" data-time="{{$schedule->time}}" data-date="{{$schedule->date}}" data-toggle="modal" data-target="#editModalForm" ><span class="mdi mdi-pencil btn-primary btn-style"></span></button></td>
                          <td><button type="button" data-id="{{$schedule->id}}" data-toggle="modal" data-target="#exampleModal" ><span class="mdi mdi-delete btn-danger btn-style"></span></button></td>
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
                      <h5 class="modal-title" id="exampleModalFormTitle">History Examination</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('schedules.store')}}" method="post">
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
                                <label for="doctor">Doctor</label>
                                <input type="text" class="form-control" id="doctor" name="doctor" readonly>
                              </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="comment">Comment:</label>
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
              <!-- Edit modal form -->
              <div class="modal fade" id="editModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content doctor">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalFormTitle">Edit Schedule</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span id="star" aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('schedules.update','update')}}" method="post">
                      @csrf
                      @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="time">Giờ Khám</label>
                                <select  class="form-control" id="timeEdit" name="timeEdit">
                                <option value="">Choose Time</option>
                                <option value="07:00 - 07:30 AM">07:00 - 07:30 AM</option>
                                <option value="07:30 - 08:00 AM">07:30 - 08:00 AM</option>
                                <option value="08:00 - 08:30 AM">08:00 - 08:30 AM</option>
                                <option value="08:30 - 09:00 AM">08:30 - 09:00 AM</option>
                                <option value="09:00 - 09:30 AM">09:00 - 09:30 AM</option>
                                <option value="09:30 - 10:00 AM">09:30 - 10:00 AM</option>
                                <option value="10:00 - 10:30 AM">10:00 - 10:30 AM</option>
                                <option value="10:30 - 11:00 AM">10:30 - 11:00 AM</option>
                                <option value="11:00 - 11:30 AM">11:00 - 11:30 AM</option>
                                <option value="01:00 - 01:30 PM">01:00 - 01:30 PM</option>
                                <option value="01:30 - 02:00 PM">01:30 - 02:00 PM</option>
                                <option value="02:00 - 02:30 PM">02:00 - 02:30 PM</option>
                                <option value="02:30 - 03:00 PM">02:30 - 03:00 PM</option>
                                <option value="03:00 - 03:30 PM">03:00 - 03:30 PM</option>
                                <option value="03:30 - 04:00 PM">03:30 - 04:00 PM</option>
                                <option value="04:00 - 04:30 PM">04:00 - 04:30 PM</option>
                                <option value="04:30 - 05:00 PM">04:30 - 05:00 PM</option>
                                </select>
                                <input  id="idEdit" name="idEdit" hidden>
                                
                              </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="identity">Date</label>
                                  <input type="date" min="" name="dateEdit" id="dateEdit" class="form-control" placeholder="End Date" />
                              
                                </div>
                              </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                            <label for="clinic">Doctor</label>
                            <select  class="form-control" id="doctorEdit" name="doctorEdit">
                            <option value="">Choose Doctor</option>
                                
                            </select>
                          
                            </div>
                          </div>
                        </div>
                        <span id="message"></span>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-pill " id="close" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary btn-pill" onclick="return validateEdit()">Save Changes</button>
                        </div>
                      </form>
                    </div>
                    
                  </div>
                </div>
              </div>
              <!-- Form confirm -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Xóa đăng ký</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc muốn hủy đăng ký khám bệnh này ?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancel</button>
                        <form action="{{route('schedules.destroy','id')}}" method="post" id="formDelete">
                        {{method_field('delete')}}
                            @csrf
                            <input type="number" hidden class="form-control" id="schedule_id_delete" name="schedule_id_delete" value="">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </form>

                    </div>
                  </div>
                </div>
              </div>


          </div>
      </div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Get date pass to controller -->
<script type="text/javascript">
    $('#date').change(function(){
        var date = $('#date').val();
        console.log(date);
        var data = {
            'date':date
        };
        $.ajax({
        type: "POST",
        url: "../../api/passDate",
        data : data,
        success: function(response){
          
        },
    });
    });

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
<!-- Delete data modal -->
<script >
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var schedule_id = button.data('id')
    console.log(schedule_id);
    var modal = $(this);
    modal.find('.modal-footer #schedule_id_delete').val(schedule_id)
  });
</script>
<!-- Edit data modal  -->
<script type="text/javascript">
  $('#editModalForm').on('show.bs.modal', function (event) {
      $('#message').html("");
      var button = $(event.relatedTarget)
      var doctor_id = button.data('doctor_id')
      var id = button.data('id')
      var time = button.data('time')
      var date = button.data('date')
      var clinicID = button.data('clinic_id')
      var modal = $(this)
      modal.find('.modal-body #doctorEdit').val(doctor_id)
      modal.find('.modal-body #idEdit').val(id)
      modal.find('.modal-body #timeEdit').val(time)
      modal.find('.modal-body #dateEdit').val(date)

      $('select#doctorEdit').children().remove();
      $('select#doctorEdit').append(new Option("Select Doctor", ""));  
      var data = {"clinicID": clinicID}
      $.ajax({
          type: "POST",
          url: "../../api/findDoctor",
          data : data,
          success: function(response){
              var listDoctor = new Array();
              listDoctor = response.data;
            for(var i = 0; i<listDoctor.length; i++){
              var nameDoctor = (listDoctor[i].name);
              var idDoctor = (listDoctor[i].id);
              $('#doctorEdit').append(new Option(nameDoctor, idDoctor));
              $('#doctorEdit').val(doctor_id);
            }
          },
      });
    });
    $('#close, #star').click(function(){
      $('#message').html("");
    })
</script>




<!-- Validate form -->
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


<script>
  function validateEdit(){
    var message = $('#message').text();
    if(message != ""){
      return false;
    }else{
      return true;
    }
  }
  
</script>

<!-- check new schudule when edit-->
<script type="text/javascript">
    $('#editModalForm').on('show.bs.modal', function (event) {
      $('#message').html("");
      var button = $(event.relatedTarget)
      var doctor_id1 = button.data('doctor_id')
      var time1 = button.data('time')
      var date1 = button.data('date')

      $('select, #dateEdit').change(function(){
        var doctor_id =  $('#doctorEdit').find(":selected").val();
        var time = $('#timeEdit').find(":selected").val();
        var date = $('#dateEdit').val();
        var data = {
            'doctor_id': doctor_id,
            'time':time,
            'date':date
        };
        if(doctor_id1 == doctor_id &&  time1 == time && date1 == date ){
          $.ajax({
          type: "POST",
          url: "../../api/checkScheduleOld",
          data : data,
          success: function(response){
            $('#message').html(response.data);
            
            },
          });
        }else{
          $.ajax({
          type: "POST",
          url: "../../api/checkSchedule",
          data : data,
          success: function(response){
            $('#message').html(response.data);
            
            },
          });
        }
    });
    }); 
    $('#close, #star').click(function(){
      $('#message').html("");
    })
</script>


<!-- Set min time -->
<script>
    window.onload = function(){
    var d = new Date();
    // Build ISO 8601 format date string
    var s = d.getFullYear() + '-' + 
            ('0' + (d.getMonth()+1)).slice(-2) + '-' +
            ('0' + d.getDate()).slice(-2);
    
    // Set the value of the value and min attributes
    var node = document.querySelector('input#dateEdit');
    if (node) {
    node.setAttribute('min', s);
    node.setAttribute('value', s);
    
    }
}
</script>
  </body>
</html>
