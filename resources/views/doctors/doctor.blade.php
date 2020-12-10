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
                                        <select  class="form-control" id="clinicSearch" name="clinicSearch" >
                                          <option value="">Choose Clinic</option>
                                            @foreach($lsClinic as $clinic)
                                              <option value="{{$clinic->id}}" {{$clinic->id == $clinic_id ? 'selected' : ''}} >{{$clinic->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group ">
                                      <input type="text" class="form-control" placeholder="Enter Name Doctor" name="nameSearch" id="nameSearch" value="{{$name}}">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group ">
                                      <input type="submit" class="btn btn-primary" value="Tìm kiếm" />
                                    </div>
                                  </div>

                                </div>
                              </div>

                            </form>
                          </div>
                          <!-- End search -->
                          <div class="navbar-right" style="padding: 0; margin-left: 430px;" >
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


                      <!-- Data Table -->
                      <span ><button type="button" data-toggle="modal" data-target="#insertForm"  class="btn btn-primary" style="float: right;  margin: 30px 78px 20px 2px ;">Add New Doctor</button></span>
                      <div class="container">

                        <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th  class="header_table" style="width:7%">STT</th>
                              <th  class="header_table" style="width:8%">Code</th>
                              <th  class="header_table" style="width:20%">Name</th>
                              <th  class="header_table" style="width:20%">Clinic</th>
                              <th  class="header_table" style="width:20%">Phone</th>
                              <th  class="header_table" style="width:10%">Avata</th>
                              <th  class="header_table" style="width:7%">Action</th>
                              <th  class="header_table" style="width:7%">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($lsDoctor as $doctor)
                            <tr>

                              <td>{{ $loop->index + 1}}</td>
                              <td>{{$doctor->code}}</td>
                              <td>{{$doctor->name}}</td>
                              <td>{{$doctor->clinic->name}}</td>
                              <td>{{$doctor->phone}}</td>
                              <td><img src="{{asset($doctor->image)}}" alt="image" class="imageCover"></td>
                              <td><button data-image="{{$doctor->image}}" data-clinic_id="{{$doctor->clinic_id}}" data-doctor_id="{{$doctor->id}}" data-name="{{$doctor->name}}" data-phone="{{$doctor->phone}}" data-code="{{$doctor->code}}" data-toggle="modal" data-target="#exampleModalForm" class="button_delete"><span class="mdi mdi-pencil btn-primary btn-style"></button></td>
                              <td><button data-doctor_id="{{$doctor->id}}" data-toggle="modal" data-target="#exampleModal" class="button_delete" ><span class="mdi mdi-delete btn-danger btn-style"></span></button></td>
                            </tr>

                            @endforeach

                          </tbody>
                        </table>
                        {{$lsDoctor->links("pagination::bootstrap-4")}}
                      </div>
                  </div>


              <!-- Modal form edit-->
              <div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                <div class="modal-dialog " role="document">
                  <div class="modal-content doctor">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalFormTitle">Edit Doctor</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" id="star">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('doctors.update','update')}}" enctype="multipart/form-data">
                          {{method_field('patch')}}
                          @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="codeEdit">Doctor code</label>
                                        <input type="text" class="form-control" id="codeEdit" aria-describedby="emailHelp" name="codeEdit" >
                                        <span id="message_code_edit"></span>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nameEdit">Name Doctor</label>
                                        <input type="text" class="form-control" id="nameEdit" aria-describedby="emailHelp" name="nameEdit" >
                                        <span id="message_name_edit"></span>
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="clinicEdit">Clinic</label>
                                    <select  class="form-control" id="clinicEdit" name="clinicEdit">
                                      @foreach($lsClinic as $clinic)



                                        <option value="{{$clinic->id}}" >{{$clinic->name}}</option>

                                      @endforeach
                                    </select>
                                    <span id="message_clinic_edit"></span>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phoneEdit">Phone</label>
                                        <input type="number" class="form-control" id="phoneEdit" name="phoneEdit" >
                                        <span id="message_phone_edit"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" hidden class="form-control" id="doctor_id_edit" name="doctor_id_edit" >
                                        <input type="text" hidden class="form-control" id="old_clinic_id" name="old_clinic_id" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="avataEdit">Avata</label>
                                        <input type="file" onchange="loadFileEdit(event)" class="form-control" id="avataEdit" name="avataEdit" style="color: transparent; border: none;padding: 0;">
                                        <span id="message_avata_edit"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   <img src="" alt="" style="width:100px;" id="imageEdit">
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" id="close" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary btn-pill" onclick="return validateEdit()">Save Change</button>
                            </div>


                          </form>
                    </div>

                  </div>
                </div>
              </div>

              <!-- Modal form insert-->
              <div class="modal fade" id="insertForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                <div class="modal-dialog" style="width: width 700px!important;" role="document">
                  <div class="modal-content doctor">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalFormTitle">New Doctor</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('doctors.store')}}" method="post" enctype="multipart/form-data" id="new_doctor">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="codeInsert">Doctor code</label>
                                        <input type="text" class="form-control" id="codeInsert" aria-describedby="emailHelp" name="codeInsert" >
                                      <span id="message_code"></span>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nameInsert">Name Doctor</label>
                                        <input type="text" class="form-control" id="nameInsert" aria-describedby="emailHelp" name="nameInsert" >
                                        <span id="message_name"></span>
                                      </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="clinic">Clinic</label>
                                    <select  class="form-control" id="clinicInsert" name="clinicInsert">
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
                                        <label for="phone">Phone</label>
                                        <input type="number" class="form-control" id="phoneInsert" name="phoneInsert" >
                                        <span id="message_phone"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="avata">Avata</label>
                                        <input type="file" class="form-control" id="avata" name="avata" onchange="loadFile(event)" style="color: transparent; border: none;padding: 0;">
                                        <span id="message_avata"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <img src=" " alt="" style="width:100px;" id="imageInsert">
                                </div>
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


              <!-- Form confirm -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Delete Doctor</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        Are you sure to delete doctor?
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancel</button>
                            <form action="{{route('doctors.destroy','id')}}" method="post" id="formDelete">
                            {{method_field('delete')}}
                                @csrf
                                <input type="number" hidden class="form-control" id="doctor_id" name="doctor_id" value="">
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>


          </div>
      </div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Upload file image insert and edit-->
<script>
	  var loadFile = function(event) {
 	  var output = document.getElementById('imageInsert');
 	  output.src = URL.createObjectURL(event.target.files[0]);
 	  output.onload = function() {
 	  URL.revokeObjectURL(output.src);
   };
   };
</script>

<script>
	  var loadFileEdit = function(event) {
 	  var output = document.getElementById('imageEdit');
 	  output.src = URL.createObjectURL(event.target.files[0]);
 	  output.onload = function() {
 	  URL.revokeObjectURL(output.src);
   };
   };
</script>

<!-- Check code  exsist-->
<script type="text/javascript">
  $(document).ready(function(){
      $('#codeInsert').keyup(function(){
        var code =  $(this).val();
        var data = {"code": code}
        $.ajax({
            type: "POST",
            url: "../../api/checkCodeDoctor",
            data : data,
            success: function(response){
               $('#message_code').html(response.data);
               console.log(response.data);
            },
        });
      });
  });
</script>

<!-- Data edit modal and validate db code Doctor -->
<script type="text/javascript">
  $('#exampleModalForm').on('show.bs.modal', function (event) {
      $('#message_code_edit').html("");
      var button = $(event.relatedTarget)
      var doctor_id = button.data('doctor_id');
      var code = button.data('code');
      var name = button.data('name');
      var phone = button.data('phone');
      var clinic_id = button.data('clinic_id');
      var avata =  button.data('image');
      var modal = $(this)

      $('#imageEdit').attr('src', avata);
      modal.find('.modal-body #old_clinic_id').val(clinic_id);
      modal.find('.modal-body #nameEdit').val(name)
      modal.find('.modal-body #phoneEdit').val(phone)
      modal.find('.modal-body #codeEdit').val(code)
      modal.find('.modal-body #doctor_id_edit').val(doctor_id)
      document.getElementById('clinicEdit').value=clinic_id;
      var codeDoctor = button.data('code');
      $('#codeEdit').keyup(function(){
        var code =  $(this).val();
        var data = {"code": code}
        if(code == codeDoctor){
          $.ajax({
            type: "POST",
            url: "../../api/checkCodeDoctor1",
            data : data,
            success: function(response){
               $('#message_code_edit').html(response.data);
               console.log(response.data);
            },
          });
        }else{
          $.ajax({
            type: "POST",
            url: "../../api/checkCodeDoctor",
            data : data,
            success: function(response){
               $('#message_code_edit').html(response.data);
               console.log(response.data);
            },
          });
        }

      });

  })
  $('#close, #star').click(function(){
    $('#message_code_edit').html("");
  })
</script>

<!-- data delete modal -->
<script >
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var doctor_id = button.data('doctor_id')
    console.log(doctor_id);
    var modal = $(this)
    modal.find('.modal-footer #doctor_id').val(doctor_id);

})
</script>

<!-- Form validate -->
<script>
  function validate(){
     			var code = $('#codeInsert').val();
          var name = $('#nameInsert').val();
     			var phone = $('#phoneInsert').val();
          var clinic_id = $('#clinicInsert').val();
          var avata = $('#avata').val();
          var result = $('#message_code').text();
     			if(name == "" && phone == "" && code == "" && clinic_id == "" ){
     				$('#message_name').html("Vui lòng nhập tên nhân viên");
     				$('#message_phone').html("Vui lòng nhập số điện thoại nhân viên");
            $('#message_code').html("Vui lòng nhập mã nhân viên");
            $('#message_clinic').html("Vui lòng chọn khoa");
            $('#message_avata').html("Vui lòng chọn ảnh nhân viên");
     				return false;
     			}else if(name != "" && phone == "" && code == "" && clinic_id == "" && avata == ""){
            $('#message_phone').html("Vui lòng nhập số điện thoại nhân viên");
            $('#message_code').html("Vui lòng nhập mã nhân viên");
            $('#message_clinic').html("Vui lòng chọn khoa");
            $('#message_avata').html("Vui lòng chọn ảnh nhân viên");
     				return false;
     			}else if(name != "" && phone != "" && code == "" && clinic_id == "" && avata == ""){
            $('#message_code').html("Vui lòng nhập mã nhân viên");
            $('#message_clinic').html("Vui lòng chọn khoa");
            $('#message_avata').html("Vui lòng chọn ảnh nhân viên");
     				return false;
     			}else if(name != "" && phone != "" && code != "" && clinic_id == "" && avata == ""){
            $('#message_clinic').html("Vui lòng chọn khoa");
            $('#message_avata').html("Vui lòng chọn ảnh nhân viên");
     				return false;
     			}else if(name != "" && phone != "" && code != "" && clinic_id != "" && avata == ""){
            $('#message_avata').html("Vui lòng chọn ảnh nhân viên");
     				return false;
     			}else if(name == "" && phone != "" && code == "" && clinic_id == "" && avata == ""){
            $('#message_name').html("Vui lòng nhập tên nhân viên");
            $('#message_code').html("Vui lòng nhập mã nhân viên");
            $('#message_clinic').html("Vui lòng chọn khoa");
            $('#message_avata').html("Vui lòng chọn ảnh nhân viên");
     			}else if(name == "" && phone == "" && code != "" && clinic_id == "" && avata == ""){
            $('#message_phone').html("Vui lòng nhập số điện thoại nhân viên");
            $('#message_name').html("Vui lòng nhập tên nhân viên");
            $('#message_clinic').html("Vui lòng chọn khoa");
            $('#message_avata').html("Vui lòng chọn ảnh nhân viên");
     				return false;
     			}else if(name == "" && phone == "" && code == "" && clinic_id != "" && avata == ""){
            $('#message_phone').html("Vui lòng nhập số điện thoại nhân viên");
            $('#message_name').html("Vui lòng nhập tên nhân viên");
            $('#message_code').html("Vui lòng nhập mã nhân viên");
            $('#message_avata').html("Vui lòng chọn ảnh nhân viên");
     				return false;
     			}else if(name == "" && phone == "" && code == "" && clinic_id == "" && avata != ""){
            $('#message_phone').html("Vui lòng nhập số điện thoại nhân viên");
            $('#message_name').html("Vui lòng nhập tên nhân viên");
            $('#message_code').html("Vui lòng nhập mã nhân viên");
            $('#message_clinic').html("Vui lòng chọn khoa");
     				return false;
     			}else if(result !=""){
            return false;
           }else{
             return true;
           }
     		};
     		var code = document.querySelector('#codeInsert');
        var name1 = document.querySelector('#nameInsert');
        var phone = document.querySelector('#phoneInsert');
        var clinic = document.querySelector('#clinicInsert');
        var avata = document.querySelector('#avata');

        name1.oninput = function(){
          $('#message_name').html("");
        };
        phone.oninput = function(){
          $('#message_phone').html("");
        };
        clinic.oninput = function(){
          $('#message_clinic').html("");
        };
        code.oninput = function(){
          $('#message_code').html("");
        };
        avata.oninput = function(){
          $('#message_avata').html("");
        };
</script>

<script>
    function validateEdit(){
          console.log("đã vào function validate")
     			var code = $('#codeEdit').val();
          var name = $('#nameEdit').val();
     			var phone = $('#phoneEdit').val();
          var clinic_id = $('#clinicEdit').val();
          var avata = $('#avataEdit').val();
          var result = $('#message_code_edit').text();
     			if(name == "" && phone == "" && code == "" && clinic_id == "" ){
     				$('#message_name_edit').html("Vui lòng nhập tên nhân viên");
     				$('#message_phone_edit').html("Vui lòng nhập số điện thoại nhân viên");
            $('#message_code_edit').html("Vui lòng nhập mã nhân viên");
            $('#message_clinic_edit').html("Vui lòng chọn khoa");
     				return false;
     			}else if(name != "" && phone == "" && code == "" && clinic_id == "" ){
            $('#message_phone_edit').html("Vui lòng nhập số điện thoại nhân viên");
            $('#message_code_edit').html("Vui lòng nhập mã nhân viên");
            $('#message_clinic_edit').html("Vui lòng chọn khoa");
     				return false;
     			}else if(name != "" && phone != "" && code == "" && clinic_id == "" ){
            $('#message_code_edit').html("Vui lòng nhập mã nhân viên");
            $('#message_clinic_edit').html("Vui lòng chọn khoa");
     				return false;
     			}else if(name != "" && phone != "" && code != "" && clinic_id == "" ){
            $('#message_clinic_edit').html("Vui lòng chọn khoa");
     				return false;
     			}else if(name == "" && phone != "" && code == "" && clinic_id == "" ){
            $('#message_name_edit').html("Vui lòng nhập tên nhân viên");
            $('#message_code_edit').html("Vui lòng nhập mã nhân viên");
            $('#message_clinic_edit').html("Vui lòng chọn khoa");

     			}else if(name == "" && phone == "" && code != "" && clinic_id == "" ){
            $('#message_phone_edit').html("Vui lòng nhập số điện thoại nhân viên");
            $('#message_name_edit').html("Vui lòng nhập tên nhân viên");
            $('#message_clinic_edit').html("Vui lòng chọn khoa");

     				return false;
     			}else if(name == "" && phone == "" && code == "" && clinic_id != "" ){
            $('#message_phone_edit').html("Vui lòng nhập số điện thoại nhân viên");
            $('#message_name_edit').html("Vui lòng nhập tên nhân viên");
            $('#message_code_edit').html("Vui lòng nhập mã nhân viên");

     				return false;
     			}else if(name == "" && phone == "" && code == "" && clinic_id == "" ){
            $('#message_phone_edit').html("Vui lòng nhập số điện thoại nhân viên");
            $('#message_name_edit').html("Vui lòng nhập tên nhân viên");
            $('#message_code_edit').html("Vui lòng nhập mã nhân viên");
            $('#message_clinic_edit').html("Vui lòng chọn khoa");
     				return false;
     			}else if(result != ""){
            return false;
           }else{
             return true;
           }
     		};
     		var code = document.querySelector('#codeEdit');
        var name2 = document.querySelector('#nameEdit');
        var phone = document.querySelector('#phoneEdit');
        var clinic = document.querySelector('#clinicEdit');
        var avata = document.querySelector('#avataEdit');
        name2.oninput = function(){
          $('#message_name_edit').html("");
        };
        phone.oninput = function(){
          $('#message_phone_edit').html("");
        };
        clinic.oninput = function(){
          $('#message_clinic_edit').html("");
        };
        code.oninput = function(){
          $('#message_code_edit').html("");
        };
        avata.oninput = function(){
          $('#message_avata_edit').html("");
        };
</script>
@endsection
