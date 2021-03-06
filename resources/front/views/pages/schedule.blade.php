@extends('layouts.master')
@section('content')
    <div class="col-md-8">
        <div class="row">
            <section class="col-md-12" style="margin:5px 0; background-color:#2b7f4b; height:800px">
                <div class="modal-body">
                    <form action="{{route('bookScheduleStore')}}" method="post" enctype="multipart/form-data" id="formBookSchedule" name="ScheduleForm">
                        @csrf
                        <h4 style="text-transform:uppercase; color:#fff; font-size: 30px;">Thông tin khách hàng</h4>
                        <div class="row">

                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="name" style="padding: 5px; text-transform:uppercase; color:#fff;">Họ và tên <span style="color:tomato;">*</span></label>
                                    <input type="text" class="form-control" id="name"  name="name" placeholder="Nhập họ tên" >
                                    <span id="message_code"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="identity" style="padding: 5px; text-transform:uppercase; color:#fff;">cmnd <span style="color:tomato;">*</span></label>
                                    <input type="number" class="form-control" id="identity"  name="identity" placeholder="Nhập CMND" >
                                    <span id="message_code"></span>
                                </div>
                            </div>

                        </div>
                        <div class="row" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" style="padding: 5px; text-transform:uppercase; color:#fff;">Địa chỉ Email <span style="color:tomato;">*</span></label>
                                    <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
                                    <span id="message_name"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" style="padding: 5px; text-transform:uppercase; color:#fff;">Số điện thoại <span style="color:tomato;">*</span></label>
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại" >
                                    <span id="message_phone"></span>
                                </div>

                            </div>
                        </div>
                        <h4 style="text-transform:uppercase; color:#fff; font-size: 30px;">Lịch hẹn</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="clinic" style="padding: 5px; text-transform:uppercase; color:#fff;">Chuyên khoa <span style="color:tomato;">*</span></label>
                                    <select  class="form-control" id="clinic" name="clinic" >
                                        <option value="">Chọn Chuyên Khoa</option>
                                        @foreach($lsClinic as $clinic)
                                            <option value="{{$clinic->id}}" >{{$clinic->name}}</option>
                                        @endforeach
                                    </select>
                                    <span id="message_clinic"></span>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="doctor" style="padding: 5px; text-transform:uppercase; color:#fff;">Bác Sĩ <span style="color:tomato;">*</span></label>
                                    <select  class="form-control" id="doctor" name="doctor">
                                        <option value="">Chọn Bác Sĩ</option>

                                    </select>
                                    <span id="message_clinic"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="time" style="padding: 5px; text-transform:uppercase; color:#fff;">Giờ Khám <span style="color:tomato;">*</span></label>
                                    <select  class="form-control" id="time" name="time">
                                        <option value="">Chọn Ngày Giờ</option>
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
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="date" style="padding: 5px; text-transform:uppercase; color:#fff;">Ngày khám <span style="color:tomato;">*</span></label>
                                    <input type="date" min= "" max= "" name="date" id="date" class="form-control" placeholder="End Date" />

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="symptom" style="padding: 5px; text-transform:uppercase; color:#fff;">Triệu chứng
                                <span style="color:tomato;">*</span></label>
                            <textarea type="number" class="form-control" id="symptom" name="symptom"
                                      placeholder="Miêu tả triệu chứng"></textarea>
                            <span id="message_code"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" hidden class="form-control" id="status" name="status" value="pendding">
                    </div>
                </div>
                <span id="message" style="color:tomato"></span>
                <div class="modal-footer" style="border:none;">
                    <!-- <button type="button" class="btn btn-danger btn-pill" data-dismiss="modal">Close</button> -->
                    <button type="submit" class="btn btn-success btn-pill" onclick="return validateBookSchedule()">Đặt
                        lịch
                    </button>
                </div>
                <span id="form-noti"></span>
            </form>
        </div>
    </section>




    <!-- reload doctor-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>

    <script type="text/javascript">
        $('select#clinic').change(function() {
            $('select#doctor').children().remove();
            $('select#doctor').append(new Option("Select Doctor", ""));
            var clinicID =  $('#clinic').find(":selected").val();
            var data = {"clinicID": clinicID}
            $.ajax({
                type: "POST",
                url: "../../../api/findDoctor",
                data : data,
                success: function(response){
                    var listDoctor = new Array();
                    listDoctor = response.data;
                    for(var i = 0; i<listDoctor.length; i++){
                        var nameDoctor = (listDoctor[i].name);
                        var idDoctor = (listDoctor[i].id);
                        $('#doctor').append(new Option(nameDoctor, idDoctor));
                    }
                },
            });
        });
    </script>

    <script type="text/javascript">
        $('select, #date').change(function(){
            var doctorID =  $('#doctor').find(":selected").val();
            var time = $('#time').find(":selected").val();
            var date = $('#date').val();
            console.log(doctorID);
            console.log(time);
            console.log(date);
            var data = {
                'doctorID': doctorID,
                'time':time,
                'date':date
            };
            $.ajax({
                type: "POST",
                url: "../../../api/checkBookSchedule",
                data : data,
                success: function(response){
                    $('#message').html(response.data);
                    console.log(response.data);
                },
            });
        });
    </script>
<!-- Validate form -->
<script>
    $("#formBookSchedule").validate({
        rules: {
            name: "required",
            phone: "required",
            identity: "required",
            email: "required",
            clinic: "required",
            doctor: "required",
            date: "required",
            time: "required",
           symptom: "required"

        },
        messages: {
            name: "Vui lòng nhập tên",
            phone: "Vui lòng nhập số điện thoại",
            identity: "Vui lòng nhập số CMND",
            email: "Vui lòng điền email",
            clinic: "Vui lòng chọn khoa",
            doctor: "Vui lòng chọn bác sĩ",
            date: "Vui lòng chọn ngày khám",
            time: "Vui lòng chọn thời gian khám",
            symptom: "Vui lòng điền triệu chứng"

        },
    });

</script>
<script>
        window.onload = function(){
            var d = new Date();
            var newdate = new Date(d);
            newdate.setDate(newdate.getDate() + 30);
            var nd = new Date(newdate);
            // Build ISO 8601 format date string
            var s = d.getFullYear() + '-' +
                ('0' + (d.getMonth()+1)).slice(-2) + '-' +
                ('0' + d.getDate()).slice(-2);
            var n = nd.getFullYear() + '-' +
                ('0' + (nd.getMonth()+1)).slice(-2) + '-' +
                ('0' + nd.getDate()).slice(-2);
            // Set the value of the value and min attributes
            var node = document.querySelector('input#date');
            if (node) {
                node.setAttribute('min', s);
                node.setAttribute('value', s);
                node.setAttribute('max', n);
                node.setAttribute('value', n);
            }
        }
    </script>
<script>
    function validateBookSchedule(){
        var message_ajax = $('#message').text();
        if(message_ajax != ""){
            return false;
        }else if(message_ajax == ""){
            return true;
        }

    }

</script>
@endsection
