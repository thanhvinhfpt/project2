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

                              <input type="text" value="{{$name}}" name="nameSearch" id="search" class="form-control" placeholder="Name User" style="border-bottom: 1px solid;"/>

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

                  <span ><button type="button" data-toggle="modal" data-target="#insertForm"  class="btn btn-primary" style="float: right;  margin: 30px 80px 20px 0 ;">Add New User</button></span>
                  <div class="container">

                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th  class="header_table" style="width:7%">STT</th>
                          <th  class="header_table" style="width:7%">ID_Employee</th>
                          <th  class="header_table" style="width:20%">User Name</th>
                          <th  class="header_table" style="width:20%">Email</th>
                          <th  class="header_table" style="width:20%">Authority</th>
                          <th  class="header_table" style="width:7%">Action</th>
                          <th  class="header_table" style="width:7%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($lsUser as $user)
                        <tr>
                          <td>{{ $loop->index + 1}}</td>
                          <td>{{$user->doctor_code}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->role_name}}</td>
                          <td><button type="button" data-password="{{$user->password}}" data-id="{{$user->id}}" data-email="{{$user->email}}" data-username="{{$user->name}}" data-toggle="modal" data-target="#exampleModalForm" ><span class="mdi mdi-pencil btn-primary btn-style"></button></td>
                          <td><button type="button" data-id='{{$user->id}}' data-toggle="modal" data-target="#exampleModal" ><span class="mdi mdi-delete btn-danger btn-style"></span></button></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{$lsUser->links("pagination::bootstrap-4")}}
                  </div>
              </div>


              <!-- Modal form edit-->
              <div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content doctor">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalFormTitle">Edit User</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('users.update','update')}}" method="post" id="editUserForm" >
                      {{method_field('patch')}}
                       @csrf
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="usernameEdit">User name</label>
                              <input type="text" class="form-control" id="usernameEdit" aria-describedby="emailHelp" name="usernameEdit" >
                              <input hidden id="idEdit" name="idEdit" >
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailEdit">Email</label>
                              <input type="text" class="form-control" id="emailEdit" aria-describedby="emailHelp" name="emailEdit" >
                              <span id="message_email_edit" style="color:tomato"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="passwordEdit">Password</label>
                                <input type="password" class="form-control" id="passwordEdit" name="passwordEdit" >
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="confirm_passwordEdit">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_passwordEdit" name="confirm_passwordEdit" >
                              </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary btn-pill">Save Changes</button>
                        </div>

                      </form>
                    </div>

                  </div>
                </div>
              </div>

              <!-- Modal form insert-->
              <div class="modal fade" id="insertForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content doctor">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalFormTitle">New User</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="{{route('users.store')}}" id="insertUserForm">
                      @csrf
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="doctorCodeInsert">Code Doctor</label>
                              <input type="text" class="form-control" id="doctorCodeInsert" name="doctorCodeInsert" value="">
                              <span id="message_doctor_code" style="color:tomato"></span>
                              <span class="doctorCodeInsert"></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="usernameInsert">User Name</label>
                              <input type="text" class="form-control" id="usernameInsert" aria-describedby="emailHelp" name="usernameInsert" value="">
                              <span class="usernameInsert"></span>
                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="passwordInsert">Password</label>
                              <input type="password" class="form-control" id="passwordInsert" name="passwordInsert" value="">
                              <span class="passwordInsert"></span>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="confirm_passwordInsert">Confirm Password</label>
                              <input type="password" class="form-control" id="confirm_passwordInsert" name="confirm_passwordInsert" value="">
                              <span class="confirm_passwordInsert"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="emailInsert">Gmail</label>
                              <input type="text" class="form-control" id="emailInsert" name="emailInsert" value="">
                              <span id="message_email_insert" style="color:tomato"></span>
                              <span class="emailInsert"></span>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary btn-pill" onclick="return validateInsert()" >Save</button>
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
                      <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        Are you sure to delete user?
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Cancel</button>
                            <form action="{{route('users.destroy','id')}}" method="post" id="formDelete">
                            {{method_field('delete')}}
                                @csrf
                                <input type="number" hidden class="form-control" id="user_id" name="user_id" value="">
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>
<!-- check doctor is exisit -->
<script type="text/javascript">
  $(document).ready(function(){
      $('#doctorCodeInsert').keyup(function(){
        var doctor_code =  $(this).val();
        var data = {"doctor_code": doctor_code}
        $.ajax({
            type: "POST",
            url: "../../api/checkDoctorExisit",
            data : data,
            success: function(response){
               $('#message_doctor_code').html(response.data);
               console.log(response.data);
            },
        });
      });
  });
</script>

<!-- Check email exisit -->
<script>
  $(document).ready(function(){
      $('#emailInsert').keyup(function(){
        var email =  $(this).val();
        var data = {"email": email}
        $.ajax({
            type: "POST",
            url: "../../api/checkEmailExisit",
            data : data,
            success: function(response){
               $('#message_email_insert').html(response.data);
               console.log(response.data);
            },
        });
      });
  });

</script>
<!-- data delete modal -->
<script >
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var user_id = button.data('id')
    var modal = $(this)
    modal.find('.modal-footer #user_id').val(user_id);
})
</script>

<!-- <script>
  function validateInsert(){
    var message1 = $('#message_email_insert').text();
    var mesage2 =  $('#message_doctor_code').text();
    var username = $('usernameInsert').val();
    var doctor_code = $('#doctorCodeInsert').val();
    var password = $('#passwordInsert').val();
    var email = $('#emailInsert').val();
    var confirm_password = $('#confirm_passwordInsert').val()
    if(doctor_code == "" && doctor_code == "" && username == "" && password == "" && confirm_password == "" ){
      $('.doctorCodeInsert').html('Vui lòng nhập mã nhân viên');

      return false;
    }else if(email == ""){
      $('#message_email_insert').html('Vui lòng nhập email nhân vien');
    }
    // if(message1 != "" || mesage2 != ""){
    //   console.log("Không thể create");
    //   return false;
    // }else if(message1 == "" && mesage2 == ""){
    //   console.log("Có thể create");
    //   return true;
    // }
  }

</script> -->

<script>

</script>

<script>
  $("#insertUserForm").validate({

  rules: {
    usernameInsert: "required",
    doctorCodeInsert: "required",
    passwordInsert: "required",
    emailInsert: "required",
    "confirm_passwordInsert": {
      equalTo: "#passwordInsert",
      required: "true"
    },

  },

  messages: {
    usernameInsert: " Vui lòng nhập tên người dùng. </br> " ,
    doctorCodeInsert: "Vui lòng nhập mã nhân viên. </br>",
    passwordInsert: "Vui lòng nhập mật khẩu. </br>",
    "confirm_passwordInsert": {
      required: "Vui lòng nhập lại mật khẩu",
      equalTo: "Hai mật khẩu phải giống nhau"

      },
    emailInsert: "Vui lòng nhập email. </br>",

  },
  submitHandler: function(form) {

    form.submit();
  }
});
$("#editUserForm").validate({

  rules: {
    usernameEdit: "required",
    passwordEdit: "required",
    emailEdit: "required",
    "confirm_passwordEdit": {
      equalTo: "#passwordEdit",

    },

  },

  messages: {
    usernameEdit: " Vui lòng nhập tên người dùng. </br> " ,
    passwordEdit: "Vui lòng nhập mật khẩu. </br>",
    "confirm_passwordEdit": {
      equalTo: "Hai mật khẩu phải giống nhau"

      },
    emailEdit: "Vui lòng nhập email. </br>",

  },
  submitHandler: function(form) {

    form.submit();
  }
});
</script>
<!-- Data edit modal -->
<script type="text/javascript">
  $('#exampleModalForm').on('show.bs.modal', function (event) {
      $('#message_edit').html("");
      console.log("open modal");
      var button = $(event.relatedTarget)
      var id = button.data('id')
      var username = button.data('username')
      var email1 = button.data('email')
      var password = button.data('password')
      var modal = $(this)

      modal.find('.modal-body #usernameEdit').val(username)
      modal.find('.modal-body #emailEdit').val(email1)
      modal.find('.modal-body #idEdit').val(id)
      modal.find('.modal-body #passwordEdit').val(password)
      modal.find('.modal-body #confirm_passwordEdit').val(password)


      $('#emailEdit').keyup(function(){
        var email =  $(this).val();
        var data = {"email": email}
        if(email == email1){
          $.ajax({
            type: "POST",
            url: "../../api/checkEmailExisitEdit",
            data : data,
            success: function(response){
               $('#message_email_edit').html(response.data);
               console.log(response.data);
            },
          });
        }else{
          $.ajax({
            type: "POST",
            url: "../../api/checkEmailExisit",
            data : data,
            success: function(response){
               $('#message_email_edit').html(response.data);
               console.log(response.data);
            },
          });
      };
      $('#close, #star').click(function(){
        $('#message_edit').html("");
      })
    });
  })
</script>
@endsection
