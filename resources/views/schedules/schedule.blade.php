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
                              <label for="clinic">Khoa khám</label>
                              <select  class="form-control" id="clinic" name="clinic" >
                                <option value="">Chọn khoa</option>
                                  @foreach($lsClinic as $clinic)
                                    <option value="{{$clinic->id}}" {{$clinic->id == $clinic_id ? 'selected' : ''}} >{{$clinic->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group ">
                              <label for="doctor">Bác sĩ</label>
                              <select  class="form-control" id="doctor" name="doctor" >
                                <option value="">Chọn bác sĩ</option>
                                  @foreach($lsDoctor as $doctor)
                                    <option value="{{$doctor->id}}" {{$doctor->id == $doctor_id ? 'selected' : ''}}  >{{$doctor->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group ">
                              <label for="date">Ngày/Tháng/Năm</label>
                              <input type="date" class="form-control"  id="date" name="date" value="{{$date}}">
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="form-group ">
                              <label for="identity">CMND</label>
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
                          <td><button type="button" data-id="{{$schedule->id}}" data-doctor="{{$schedule->doctor->name}}" data-phone="{{$schedule->phone}}" data-name="{{$schedule->name}}" data-identity="{{$schedule->identity}}" data-toggle="modal" data-target="#historyModalForm" ><span class="mdi mdi-book-open-variant btn-primary btn-style"></span></button></td>
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
                      <h5 class="modal-title" id="exampleModalFormTitle">Lịch sử khám bệnh</h5>
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
                                <label for="doctor">Bác sĩ</label>
                                <input type="text" class="form-control" id="doctor" name="doctor" readonly>
                              </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="comment">Kết quả khám bệnh</label>
                          <textarea class="form-control" rows="10" id="comment" name="comment"></textarea>
                          <span class="message" style="color:tomato"></span>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary btn-pill" onclick="return validate()">Save </button>
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
                      <h5 class="modal-title" id="exampleModalFormTitle">Đổi lịch khám</h5>
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
                                <option value="">Chọn giờ khám</option>
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
                                  <label for="identity">Ngày khám</label>
                                  <input type="date" min="" name="dateEdit" id="dateEdit" class="form-control" placeholder="End Date" />
                              
                                </div>
                              </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                            <label for="clinic">Bác sĩ</label>
                            <select  class="form-control" id="doctorEdit" name="doctorEdit">
                            <option value="">Chọn bác sĩ</option>
                                
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
@endsection
