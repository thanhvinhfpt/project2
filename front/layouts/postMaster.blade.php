<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta name="description" content="{{trans(('book-schedule.META_CONTENT'))}}">
    <link rel="icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{URL::asset('img/favicon.png')}}" type="image/x-icon">

    <!-- CSRF Token -->
    {{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i&amp;subset=vietnamese" as="fetch" crossorigin="anonymous" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Style CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/front-main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/front-header.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/front-home.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/front-footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{\App\Helpers\SiteHelper::$font_awesome_url}}">

    <!-- Scripts -->
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/main-home.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{ URL::asset('js/app.js') }}" defer></script>



</head>
<body>
@include('partial.postHeader')

@yield('content')

@include('partial.Footer')
<script src="{!! asset('js/owl.carousel.min.js') !!}"></script>
<script src="{{URL::asset('js/main-home.js')}}"></script>
<script src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>

{{--@extends('.Header')--}}
{{--<body>--}}
{{--<section class="survey" style="margin-top: 200px">--}}
{{--    <button type="button"  style="margin-bottom: 20px" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-post_id="">Take survey</button>--}}


{{--    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <form>--}}
{{--                        @csrf--}}
{{--                        --}}{{--                            <input type="hidden" id="post_id"/>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="name" class="col-form-label">Name:</label>--}}
{{--                            <input type="text" class="form-control" id="name">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="email" class="col-form-label">Email:</label>--}}
{{--                            <input type="text" class="form-control" id="email">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="telephone" class="col-form-label">Telephone:</label>--}}
{{--                            <input type="text" class="form-control" id="telephone">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="feedback" class="col-form-label">Feedback:</label>--}}
{{--                            <textarea class="form-control" id="feedback"></textarea>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-primary" id="send_msg">Send survey</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <script>--}}

{{--        $(document).ready(function () {--}}
{{--            $('#exampleModal').on('show.bs.modal', function (event) {--}}
{{--                var button = $(event.relatedTarget) // Button that triggered the modal--}}
{{--                var recipient = button.data('post_id') // Extract info from data-* attributes--}}
{{--                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).--}}
{{--                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.--}}
{{--                var modal = $(this)--}}
{{--                modal.find('.modal-title').text('Donate ' + recipient)--}}
{{--                // modal.find('.modal-body input').val(recipient)--}}
{{--                // $("#post_id").val(recipient);--}}
{{--            });--}}
{{--            $("#send_msg").click(function () {--}}

{{--                var token = $("#token").val();--}}
{{--                var name  = $("#name").val();--}}
{{--                var email = $("#email").val();--}}
{{--                var telephone = $("#telephone").val();--}}
{{--                var feedback = $("#feedback").val();--}}

{{--                var data = {--}}

{{--                    "_token" :"{{csrf_token()}}",--}}
{{--                    "name" : name,--}}
{{--                    "email" : email,--}}
{{--                    "telephone":telephone,--}}
{{--                    "feedback" : feedback,--}}
{{--                }--}}
{{--                $.ajax({--}}
{{--                        type: "POST",--}}
{{--                        url : "../api/send_survey",--}}
{{--                        data :data,--}}
{{--                        success : function (response) {--}}
{{--                            alert(response.msg);--}}
{{--                        },--}}
{{--                        error : function (response) {--}}
{{--                            alert('Loi ....');--}}
{{--                        }--}}
{{--                    }--}}


{{--                )--}}

{{--            })--}}


{{--        })--}}
{{--    </script>--}}
{{--</section>--}}
{{--</body>--}}
{{--@extends('.Footer')--}}
