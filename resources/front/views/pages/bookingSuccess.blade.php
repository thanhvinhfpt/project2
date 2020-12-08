@extends('layouts.postMaster')
@section('content')
    <div class="col-md-8">
        <div class="row">
            <h2 class="title_shadow_bvtc col-md-12" style="margin-top:50px" ><span>{{ trans('book-schedule.MENU.'.'THANK YOU') }}</span></h2>
            <h1 class="col-md-12">
                Chúc mừng bạn đã đăng ký khám bệnh thành công tại Bệnh viện Thu Cúc
            </h1>
            <h3 class="col-md-12" style="font-weight: 600!important;font-size:24px">Chi tiết đặt lịch</h3></br>
            <div class="detail col-md-12">
                <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th  style="font-weight:600" style="width:15%">Name</th>
                          <th  style="font-weight:600" style="width:15%">Phone</th>
                          <th  style="font-weight:600" style="width:15%">CMND</th>
                          <th  style="font-weight:600" style="width:15%">Docter</th>
                          <th  style="font-weight:600" style="width:15%">Clinic</th>
                          <th  style="font-weight:600" style="width:15%">Time</th>
                          <th  style="font-weight:600" style="width:10%">Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{$name}}</td>
                          <td>{{$phone}}</td>
                          <td>{{$identity}}</td>
                          <td>{{$doctor}}</td>
                          <td>{{$clinic}}</td>
                          <td>{{$time}}</td>
                          <td>{{$date}}</td>
                        </tr>
                      </tbody>
                    </table>
            </div>
    </div>
    </div>
 



@endsection
