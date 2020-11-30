@extends('layouts.Head')

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Bell - v2.1.0
    * Template URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
@extends('layouts.Header')
<body>
<section class="Appointment" style="margin-top: 200px">
    <button type="button"  style="margin-bottom: 20px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-post_id="">Book lịch khám</button>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">FORM ĐĂNG KÝ KHÁM BỆNH </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Tên" id="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" id="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Số điện thoai" id="telephone">
                        </div>
                        <div class="form-group">
                            <label for="clinic">Khoa</label>
                            <select class="form-control" id="clinic">
                                <option>Khoa phụ sản</option>
                                <option>Chuyên khoa gan mật</option>
                                <option>Chuyên khoa tiêu hóa</option>
                                <option>Chuyên khoa cơ xương khớp</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <textarea type="text" class="form-control" placeholder="Triệu chứng" id="symptom"></textarea>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="send_msg">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function () {
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                // var recipient = button.data('post_id') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('Donate ' + recipient)
                // modal.find('.modal-body input').val(recipient)
                // $("#post_id").val(recipient);
            });
            $("#send_msg").click(function () {

                var token = $("#token").val();
                var name  = $("#name").val();
                var email = $("#email").val();
                var clinic = $("#clinic").val();
                var telephone = $("#telephone").val();
                var symptom = $("#symptom").val();

                var data = {

                    "_token" :"{{csrf_token()}}",
                    "name" : name,
                    "email" : email,
                    "telephone":telephone,
                    "symptom" : symptom,
                    "clinic"  : clinic,
                }
                $.ajax({
                        type: "POST",
                        url : "../api/send_Appointment",
                        data :data,
                        success : function (response) {
                            alert(response.msg);
                        },
                        error : function (response) {
                            alert('Loi ....');
                        }
                    }


                )

            })


        })
    </script>
</section>
</body>
@extends('layouts.Footer')
