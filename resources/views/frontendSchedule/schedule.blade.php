@extends('layouts.admin')
        <div class="page-wrapper">
                  <!-- Header -->
                  <header class="main-header " id="header">
                    <nav class="navbar navbar-static-top navbar-expand-lg">
                      <!-- Sidebar toggle button -->
                      <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                      </button>
                       <!-- Search -->

                      <!-- End search -->
                      <div class="navbar-right" style="padding: 0; margin-left: 115px;" >
                        <ul class="nav navbar-nav">

                          <li class="dropdown user-menu" >
                            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" style="padding:0!important">
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
                   <!-- search -->

                   <button type="button" data-toggle="modal" data-target="#insertForm"  class="btn btn-primary" > ĐẶt lịch</button></span>
              <!-- Modal form inser-->
              <div class="modal fade" id="insertForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                <div class="modal-dialog" style="width: width 700px!important;" role="document">
                  <div class="modal-content docter">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalFormTitle">New Schedule</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data" id="new_doctor">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Họ và tên</label>
                                        <input type="text" class="form-control" id="name"  name="name" placeholder="Enter your name">
                                      <span id="message_code"></span>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Địa chỉ Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" >
                                        <span id="message_name"></span>
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="identity">CMND</label>
                                        <input type="number" class="form-control" id="identity"  name="identity" placeholder="Enter your identity">
                                      <span id="message_code"></span>
                                      </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter your email">
                                        <span id="message_phone"></span>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="clinic">Clinic</label>
                                    <select  class="form-control" id="clinic" name="clinic">
                                    <option value="">Choose Clinic</option>
                                      @foreach($lsClinic as $clinic)
                                        <option value="{{$clinic->id}}" >{{$clinic->name}}</option>
                                        @endforeach
                                    </select>
                                    <span id="message_clinic"></span>
                                  </div>

                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="doctor">Doctor</label>
                                    <select  class="form-control" id="doctor" name="doctor">
                                    <option value="">Choose Doctor</option>

                                    </select>
                                    <span id="message_clinic"></span>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="time">Giờ Khám</label>
                                        <select  class="form-control" id="time" name="time">
                                        <option value="">Choose Time</option>
                                        <option value="1">07:00 - 07:30 AM</option>
                                        <option value="1">07:30 - 08:00 AM</option>
                                        <option value="1">08:00 - 08:30 AM</option>
                                        <option value="1">08:30 - 09:00 AM</option>
                                        <option value="1">09:00 - 09:30 AM</option>
                                        <option value="1">09:30 - 10:00 AM</option>
                                        <option value="1">10:00 - 10:30 AM</option>
                                        <option value="1">10:30 - 11:00 AM</option>
                                        <option value="1">11:00 - 11:30 AM</option>
                                        <option value="1">01:00 - 01:30 PM</option>
                                        <option value="1">01:30 - 02:00 PM</option>
                                        <option value="1">02:00 - 02:30 PM</option>
                                        <option value="1">02:30 - 03:00 PM</option>
                                        <option value="1">03:00 - 03:30 PM</option>
                                        <option value="1">03:30 - 04:00 PM</option>
                                        <option value="1">04:00 - 04:30 PM</option>
                                        <option value="1">04:30 - 05:00 PM</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="StartTime">Ngày khám</label>
                                        <input type="date" min= "" max="" name="endTime" id="endTime" class="form-control" placeholder="End Date" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="identity">Triệu chứng</label>
                                        <textarea type="number" class="form-control" id="identity"  name="identity" placeholder="Enter your identity"></textarea>
                                      <span id="message_code"></span>
                                      </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" hidden class="form-control" id="status" name="status" value="pendding">
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary btn-pill" >Save </button>
                            </div>
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

<!-- reload doctor-->
<script type="text/javascript">
    $('select#clinic').change(function() {
    $('select#doctor').children().remove();
    $('select#doctor').append(new Option("Select Doctor", ""));
    var clinicID =  $('#clinic').find(":selected").val();
    console.log(clinicID);
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
            var codeDoctor = (listDoctor[i].code);
            $('#doctor').append(new Option(nameDoctor, codeDoctor));
           }
        },
    });
});
</script>
<script>
    window.onload = function(){

    var d = new Date();

    // Build ISO 8601 format date string
    var s = d.getFullYear() + '-' +
            ('0' + (d.getMonth()+1)).slice(-2) + '-' +
            ('0' + d.getDate()).slice(-2);

    // Set the value of the value and min attributes
    var node = document.querySelector('input#endTime');
    if (node) {
    node.setAttribute('min', s);
    node.setAttribute('value', s);

    }
}
</script>
  </body>
</html>
