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
                          <h2 class="mb-1">71,503</h2>
                          <p>Online Signups</p>
                          <div class="chartjs-wrapper">
                            <canvas id="barChart"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini  mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">9,503</h2>
                          <p>New Visitors Today</p>
                          <div class="chartjs-wrapper">
                            <canvas id="dual-line"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">71,503</h2>
                          <p>Monthly Total Order</p>
                          <div class="chartjs-wrapper">
                            <canvas id="area-chart"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                      <div class="card card-mini mb-4">
                        <div class="card-body">
                          <h2 class="mb-1">9,503</h2>
                          <p>Total Revenue This Year</p>
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
                          <h2>Sales Of The Year</h2>
                        </div>
                        <div class="card-body">
                          <canvas id="linechart" class="chartjs"></canvas>
                        </div>
                        <div class="card-footer d-flex flex-wrap bg-white p-0">
                          <div class="col-6 px-0">
                            <div class="text-center p-4">
                              <h4>$6,308</h4>
                              <p class="mt-2">Total orders of this year</p>
                            </div>
                          </div>
                          <div class="col-6 px-0">
                            <div class="text-center p-4 border-left">
                              <h4>$70,506</h4>
                              <p class="mt-2">Total revenue of this year</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
							<div class="col-xl-4 col-md-12">
                  <!-- Doughnut Chart -->
                  <div class="card card-default" data-scroll-height="675">
                    <div class="card-header justify-content-center">
                      <h2>Orders Overview</h2>
                    </div>
                    <div class="card-body" >
                      <canvas id="doChart" ></canvas>
                    </div>
                    <a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i> Download overall report</a>
                    <div class="card-footer d-flex flex-wrap bg-white p-0">
                      <div class="col-6">
                        <div class="py-4 px-4">
                          <ul class="d-flex flex-column justify-content-between">
                            <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #4c84ff"></i>Order Completed</li>

                          </ul>
                        </div>
                      </div>
                      <div class="col-6 border-left">
                        <div class="py-4 px-4 ">
                          <ul class="d-flex flex-column justify-content-between">
                            <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #8061ef"></i>Order Pending</li>

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
                    <th  class="header_table" style="width:5%">STT</th>
                    <th  class="header_table" style="width:20%">Name</th>
                    <th  class="header_table" style="width:20%">CMND</th>
                    <th  class="header_table" style="width:20%">Docter</th>
                    <th  class="header_table" style="width:20%">Clinic</th>
                    <th  class="header_table" style="width:7%">From</th>
                    <th  class="header_table" style="width:7%">To</th>
                    <th  class="header_table" style="width:7%">Action</th>
                    <th  class="header_table" style="width:7%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Hoàng Đạo Thúy</td>
                    <td>171234321</td>
                    <td>Hoàng Đạo Thúy</td>
                    <td>Khoa tâm thần</td>
                    <td>12.30</td>
                    <td>13.00</td>
                    <td><button type="button" data-toggle="modal" data-target="#exampleModalForm" >Close</button></td>
                    <td><button type="button" data-toggle="modal" data-target="#exampleModal" >Delete</button></td>
                  </tr>

                </tbody>
              </table>
            </div>
           </div>
        </div>

      </div>
      <!-- Modal form -->
      <div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content docter">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalFormTitle">Modal Title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form>
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="name">Tên bệnh nhân</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" value="Hoàng Đạo Thúy">
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                <label for="identity">Số chứng minh nhân dân</label>
                                <input type="number" class="form-control" id="identity" value="171234321">
                              </div>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="phone">Điện thoại</label>
                                <input type="number" class="form-control" id="phone" aria-describedby="emailHelp" value="123456789"/>
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                <label for="doctor">Doctor</label>
                                <input type="text" class="form-control" id="doctor" value="abc">
                              </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="comment">Comment:</label>
                          <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                      </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary btn-pill">Save Changes</button>
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
              <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Hủy</button>
              <button type="button" class="btn btn-primary btn-pill">Xác nhận</button>
            </div>
          </div>
        </div>
      </div>
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
@endsection

