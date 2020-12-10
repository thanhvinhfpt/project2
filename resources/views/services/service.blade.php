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
                              <div class="col-md-5">
                                <div class="form-group ">
                                  <input type="text" class="form-control" placeholder="Enter Clinic" id="searchClinic" name="searchClinic" value="{{$searchClinic}}">
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
                      <div class="navbar-right style=" style="padding: 0; margin-left: 430px;">
                        <ul class="nav navbar-nav">

                          <li class="dropdown user-menu">
                            <button  style="padding:0!important" href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
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
                  <span ><button type="button" data-toggle="modal" data-target="#insertForm"  class="btn btn-primary" style="float: right;  margin: 30px 81px 20px 0 ;">Add New Clinic</button></span>
                  <div class="container">

                    <table id="datatable" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th style=" width:7%" class="header_table">STT</th>
                          <th style=" width:8%" class="header_table">ID </th>
                          <th style=" width:20%" class="header_table">Name of Clinic</th>
                          <th style=" width:20%" class="header_table">Phone</th>
                          <th style=" width:20%" class="header_table">Total Doctor</th>
                          <th style=" width:7%" class="header_table">Action</th>
                          <th style=" width:7%" class="header_table">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($lsClinic as $clinic)
                        <tr>

                          <td>{{ $loop->index + 1}}</td>
                          <td>{{$clinic->id}}</td>
                          <td>{{$clinic->name}}</td>
                          <td>{{$clinic->phone}}</td>
                          <td>{{$clinic->totalDoctor}}</td>
                          <td><button data-service_id="{{$clinic->id}}" data-name="{{$clinic->name}}" data-phone="{{$clinic->phone}}" data-totalDoctor="{{$clinic->totalDoctor}}" data-toggle="modal" data-target="#exampleModalForm" ><span class="mdi mdi-pencil btn-primary btn-style"></button></td>
                          <td><button data-service_id="{{$clinic->id}}" data-toggle="modal" data-target="#exampleModal" ><span class="mdi mdi-delete btn-danger btn-style"></span></button></td>
                        </tr>

                        @endforeach
                      </tbody>
                    </table>
                    {{$lsClinic->links("pagination::bootstrap-4")}}
                  </div>
              </div>


              <!-- Modal form edit-->
              <div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalFormTitle">Edit Clinic</h5>
                      <button type="button" id="star" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="close">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="{{route('services.update','update')}}" >
                      {{method_field('patch')}}
                       @csrf

                        <div class="form-group">
                          <label for="name">Name of Clinic</label>
                          <input type="text" class="form-control" id="name"  name="name" >
                          <span id="message_edit"></span>
                        </div>
                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input type="text" class="form-control" id="phone" name="phone" >
                          <span id="message_phone_edit"></span>
                        </div>
                        <div class="form-group">
                          <input type="number" hidden class="form-control" id="totalDoctor" name="totalDoctor">
                          <input type="number" hidden class="form-control" id="service_id" name="service_id" value="">
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-pill" id="close" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary btn-pill" onclick="return validateEdit()">Save Change</button>
                        </div>

                      </form>
                    </div>

                  </div>
                </div>
              </div>

              <!-- Modal form insert-->
              <div class="modal fade" id="insertForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalFormTitle">New Clinic</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('services.store')}}">
                        @csrf
                            <div class="form-group">
                              <label for="name">Name of Clinic</label>
                              <input type="text" class="form-control" name="name" id="inserClinic" >
                              <span id="message"></span>
                            </div>
                            <div class="form-group">
                              <label for="phone">Phone</label>
                              <input type="text" class="form-control"  name="phone" id="insertPhone" >
                              <span id="message_phone"></span>
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
                      <h5 class="modal-title" id="exampleModalLabel">Delete Clinic</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" id="starDelete">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <p class="" id="confirmMessage">Are you sure to delete clinic?</p>
                        <span id="message_delete" style="color:tomato"></span>
                        <div class="modal-footer">
                          <span id="message_delete"></span>
                          <button type="button" class="btn btn-danger btn-pill" id="closeDelete" data-dismiss="modal">Cancel</button>
                            <form action="{{route('services.destroy','id')}}" method="post" id="formDelete">
                            {{method_field('delete')}}
                                @csrf
                                <input type="number" hidden  class="form-control" id="service_id" name="service_id" value="">
                                <button type="submit" class="btn btn-primary " id="confirmDelete">Confirm</button>
                            </form>
                        </div>
                    </div>

                  </div>
                </div>
              </div>


          </div>
      </div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>




<!-- Data open model + ajax check edit -->
<script type="text/javascript">
  $('#exampleModalForm').on('show.bs.modal', function (event) {
      $('#message_edit').html("");
      console.log("open modal");
      var button = $(event.relatedTarget)
      var service_id = button.data('service_id')
      var name = button.data('name')
      var phone = button.data('phone')
      var totalDoctor = button.data('totalDoctor')
      var modal = $(this)

      modal.find('.modal-body #name').val(name)
      modal.find('.modal-body #phone').val(phone)
      modal.find('.modal-body #totalDoctor').val(totalDoctor)
      modal.find('.modal-body #service_id').val(service_id)

      var nameclinic = button.data('name')
      $('#name').keyup(function(){
        var name =  $(this).val();
        var data = {"name": name}
        if(nameclinic == name){
          $.ajax({
            type: "POST",
            url: "../../api/checkEditClinic1",
            data : data,
            success: function(response){
                $('#message_edit').html(response.data);

            },
        });
        }else{
          $.ajax({
            type: "POST",
            url: "../../api/checkEditClinic2",
            data : data,
            success: function(response){
                $('#message_edit').html(response.data);

            },
        })
      };
      $('#close, #star').click(function(){
        $('#message_edit').html("");
      })
    });
  })
</script>


<!-- data delete modal -->
<script >
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var service_id = button.data('service_id')
    console.log(service_id);
    var modal = $(this)
    modal.find('.modal-body #service_id').val(service_id);
    var data = {"service_id": service_id};
    $.ajax({
        type: "POST",
        url: "../../api/checkDeleteClinic",
        data : data,
        success: function(response){
            $('#message_delete').html(response.data);
            var message = $('#message_delete').text();
            if(message != ""){
              $('#confirmMessage, #confirmDelete').addClass("delete");
            }else{
              $('#confirmMessage, #confirmDelete').removeClass("delete");
            }
        },
    });

})


</script>



<!-- Ajax check trùng tên -->
<script type="text/javascript">
  $(document).ready(function(){
      $('#inserClinic').keyup(function(){
        var name =  $(this).val();
        var data = {"nameClinic": name}
        $.ajax({
            type: "POST",
            url: "../../api/checkClinic",
            data : data,
            success: function(response){
               $('#message').html(response.data);
               console.log(response.data);
            },
        });
      });
  });
</script>



<!-- Form validate -->
 <script>
    function validate(){
     			var name = $('#inserClinic').val();

     			var phone = $('#insertPhone').val();
          var result = $('#message').text();
     			if(name == "" && phone == ""){
     				$('#message').html("Vui lòng nhập tên khoa");
     				$('#message_phone').html("Vui lòng nhập số điện thoại của khoa");
     				return false;
     			}else if(name != "" && phone == ""){
            $('#message_phone').html("Vui lòng nhập số điện thoại của khoa");
     				return false;
     			}else if(name == "" && phone != ""){
            $('#message').html("Vui lòng nhập tên khoa");
     				return false;
     			}else if(result == "Tên khoa đã tồn tại"){
            return false;
     			}else{
             return true;
           }
     		};
     		var name = document.querySelector('#inserClinic');
        var phone = document.querySelector('#insertPhone');
         	name.oninput = function(){
         		$('#message').html("");
         	};
         	phone.oninput = function(){
         		$('#message_phone').html("");
         	};
</script>
<script>
  function validateEdit(){
         var nameEdit = $('#name').val();
         var phoneEdit = $('#phone').val();
         var result = $('#message_edit').text();
         console.log(nameEdit);
         if(nameEdit == "" && phoneEdit == ""){
           $('#message_edit').html("Vui lòng nhập tên khoa");
           $('#message_phone_edit').html("Vui lòng nhập số điện thoại của khoa");
           return false;
         }else if(nameEdit != "" && phoneEdit == ""){
          $('#message_phone_edit').html("Vui lòng nhập số điện thoại của khoa");
           return false;
         }else if(nameEdit == "" && phoneEdit != ""){
          $('#message_edit').html("Vui lòng nhập tên khoa");
           return false;
         }else if(result == "Tên khoa đã tồn tại"){
            return false;
     			}else{
           return true;
         }
       };
        var nameEdit = document.querySelector('#name');
        var phoneEdit = document.querySelector('#phone');
         nameEdit.oninput = function(){
           $('#message_edit').html("");
         };
         phoneEdit.oninput = function(){
           $('#message_phone_edit').html("");
         };
</script>
@endsection
