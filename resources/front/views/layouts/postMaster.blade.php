<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta name="description" content="{{trans(('book-schedule.META_CONTENT'))}}">
    <link rel="icon" href="{{asset('upload/tải xuống.png')}}" type="image/x-icon">
    <style>
        #detailPost p img{
            display: block;
            margin:0 auto;
        }
    </style>

    <!-- CSRF Token -->
    {{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>{{ config('app.name', 'Heza-MedicalTemplate') }}</title>


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
    <style>
        #detailPost p img{
            display: block;
            margin:0 auto;
        }
    </style>


</head>
<body>
@include('partial.postHeader')
<section class="container12 sec17">
    <div class="wrap">
        <div class="d-flex">
            @yield('content')

            @include('partial.SideBar')
        </div>
    </div>
</section>

@include('partial.Footer')
<script src="{!! asset('js/owl.carousel.min.js') !!}"></script>
<script src="{{URL::asset('js/main-home.js')}}"></script>
<script src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>


