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


        <div class="content-wrapper">
          <div class="content">
                  <!-- Top Statistics -->
                  <div class="row">
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{$total}}</h2>
                          <p>Total Booking</p>
                          <div class="chartjs-wrapper">
                            <canvas id="barChart"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini  mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{$total1}}</h2>
                          <p>Booking Success</p>
                          <div class="chartjs-wrapper">
                            <canvas id="dual-line"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{$total2}}</h2>
                          <p>Booking Cancel</p>
                          <div class="chartjs-wrapper">
                            <canvas id="area-chart"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">{{$total3}}</h2>
                          <p>Booking Pending</p>
                          <div class="chartjs-wrapper">
                            <canvas id="line"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


						<div class="row">
							<div class="col-xl-8 col-md-12">
                      <!-- Sales Graph -->
                      <div class="card card-default" data-scroll-height="675">
                        <div class="card-header">
                          <h2>Success and Cancel booking</h2>
                        </div>
                        <div class="card-body">
                          <canvas id="linechart" class="chartjs"></canvas>
                        </div>
                        <div class="card-footer d-flex flex-wrap bg-white p-0">
                          <div class="col-6 px-0">
                            <div class="text-center p-4">
                              <h4>{{$totalSuccess}}</h4>
                              <p class="mt-2">Total success booking</p>
                            </div>
                          </div>
                          <div class="col-6 px-0">
                            <div class="text-center p-4 border-left">
                              <h4>{{$totalCancel}}</h4>
                              <p class="mt-2">Total cancel booking</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
							<div class="col-xl-4 col-md-12">
                  <!-- Doughnut Chart -->
                  <div class="card card-default" data-scroll-height="675">
                    <div class="card-header justify-content-center">
                      <h2>Booking Overview</h2>
                    </div>
                    <div class="card-body" >
                      <canvas id="doChart" ></canvas>
                    </div>
                    <a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i> Download overall report</a>
                    <div class="card-footer d-flex flex-wrap bg-white p-0">
                      <div class="col-4">
                        <div class="">
                          <ul class="d-flex flex-column justify-content-between">
                            <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #4c84ff"></i>&nbspBooking Success</li>

                          </ul>
                        </div>
                      </div>
                      <div class="col-4 border-left">
                        <div class="">
                          <ul class="d-flex flex-column justify-content-between">
                            <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #4c84ff"></i> Booking Cancel</li>

                          </ul>
                        </div>
                      </div>
                      <div class="col-4 border-left">
                        <div class=" ">
                          <ul class="d-flex flex-column justify-content-between">
                            <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #8061ef"></i>Booking Pending</li>

                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
           <div class="row">
            <div class="container">
              <h3 style="color: black; font-size: 28px; margin-bottom: 10px;">New Schedule</h3>
              <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                
                          <th  class="header_table" style="width:15%">Name</th>
                          <th  class="header_table" style="width:15%">CMND</th>
                          <th  class="header_table" style="width:15%">Doctor</th>
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
                   
            </div>
           </div>
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
                          <label for="comment">Kết quả khám</label>
                          <textarea class="form-control" rows="10" id="comment" name="comment"></textarea>
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
                      <h5 class="modal-title" id="exampleModalFormTitle">Sửa lịch khám</h5>
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
      <!-- Form confirm -->
      
          <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a
                >.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/charts/Chart.min.js"></script>
<script src="assets/js/chart.js"></script>
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
<script>
var ctx = document.getElementById("linechart");
  if (ctx !== null) {
    var data1 = <?php echo json_encode($data1)?>;
    var data2 = <?php echo json_encode($data2)?>;
    console.log(data2);
    var chart = new Chart(ctx, {
      // The type of chart we want to create
      type: "line",

      // The data for our dataset
      data: {
        labels: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec"
        ],
        datasets: [
          {
            label: "Success booking",
            backgroundColor: "transparent",
            borderColor: "rgb(82, 136, 255)",
            data: data1,
            lineTension: 0.3,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255,255,255,1)",
            pointHoverBackgroundColor: "rgba(255,255,255,1)",
            pointBorderWidth: 2,
            pointHoverRadius: 8,
            pointHoverBorderWidth: 1
          },
          {
            label: "Cancel booking",
            backgroundColor: "transparent",
            borderColor: "rgb(255, 0, 0, 1)",
            data: data2,
            lineTension: 0.3,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255,255,255,1)",
            pointHoverBackgroundColor: "rgba(255,255,255,5)",
            pointBorderWidth: 2,
            pointHoverRadius: 8,
            pointHoverBorderWidth: 1
          }
        ]
      },

      // Configuration options go here
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false
        },
        layout: {
          padding: {
            right: 10
          }
        },
        scales: {
          xAxes: [
            {
              gridLines: {
                display: false
              }
            }
          ],
          yAxes: [
            {
              gridLines: {
                display: true,
                color: "#eee",
                zeroLineColor: "#eee",
              },
              ticks: {
                callback: function(value) {
                  var ranges = [
                    { divider: 1e6, suffix: "M" },
                    { divider: 1e4, suffix: "k" }
                  ];
                  function formatNumber(n) {
                    for (var i = 0; i < ranges.length; i++) {
                      if (n >= ranges[i].divider) {
                        return (
                          (n / ranges[i].divider).toString() + ranges[i].suffix
                        );
                      }
                    }
                    return n;
                  }
                  return formatNumber(value);
                }
              }
            }
          ]
        },
        tooltips: {
          callbacks: {
            title: function(tooltipItem, data) {
              return data["labels"][tooltipItem[0]["index"]];
            },
            label: function(tooltipItem, data) {
              return data["datasets"][0]["data"][tooltipItem["index"]] + " book";
            }
          },
          responsive: true,
          intersect: false,
          enabled: true,
          titleFontColor: "#888",
          bodyFontColor: "#555",
          titleFontSize: 12,
          bodyFontSize: 18,
          backgroundColor: "rgba(256,256,256,0.95)",
          xPadding: 20,
          yPadding: 10,
          displayColors: false,
          borderColor: "rgba(220, 220, 220, 0.9)",
          borderWidth: 2,
          caretSize: 10,
          caretPadding: 15
        }
      }
    });
  }
</script>
<script>
var doughnut = document.getElementById("doChart");
  if (doughnut !== null) {
    var total1 = <?php echo json_encode($total1)?>;
    var total2 = <?php echo json_encode($total2)?>;
    var total3 = <?php echo json_encode($total3)?>;
    var myDoughnutChart = new Chart(doughnut, {
      type: "doughnut",
      data: {
        labels: ["Success", "Cancel", "Pendding"],
        datasets: [
          {
            label: ["Success", "Cancel", "Pendding"],
            data: [total1, total2, total3],
            backgroundColor: ["#4c84ff", "#29cc97", "#8061ef"],
            borderWidth: 1
            // borderColor: ['#4c84ff','#29cc97','#8061ef','#fec402']
            // hoverBorderColor: ['#4c84ff', '#29cc97', '#8061ef', '#fec402']
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: false
        },
        cutoutPercentage: 75,
        tooltips: {
          callbacks: {
            title: function(tooltipItem, data) {
              return "Booking : " + data["labels"][tooltipItem[0]["index"]];
            },
            label: function(tooltipItem, data) {
              return data["datasets"][0]["data"][tooltipItem["index"]];
            }
          },
          titleFontColor: "#888",
          bodyFontColor: "#555",
          titleFontSize: 12,
          bodyFontSize: 14,
          backgroundColor: "rgba(256,256,256,0.95)",
          displayColors: true,
          borderColor: "rgba(220, 220, 220, 0.9)",
          borderWidth: 2
        }
      }
    });
  }
</script>
@endsection

