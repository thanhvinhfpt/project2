@extends('layouts.master')
@section('content')
    <div class="sec17_col1" id="primary">
        <h2 class="title_shadow_bvtc row2" style="margin-top: 24px;">
            <span>
                <a href="{{route('lsPost',21)}}">{{ trans('book-schedule.MENU.'.'ĐỘI NGŨ BÁC SĨ') }}</a>
            </span>
        </h2>
        <div class="sec17_col1_row2">
            <div id="metaslider-id-33900" style="width: 100%;" class="ml-slider-3-18-8 metaslider metaslider-flex metaslider-33900 ml-slider slide-doingubacsi nav-hidden nav-hidden">
                <div id="metaslider_container_33900">
                    <div id="metaslider_33900">
                        <ul aria-live="polite" class="slides owl-carousel owl-theme owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-15704px, 0px, 0px);">

                                        <div class="owl-item" style="width: 785.219px;">
                                            <li style="display: initial; width: 100%;" class="slide-72868 ms-image item">
                                                <a href="{{route('FrontendPost',41)}}" target="_self">
                                                    <img height="200" width="770" alt="" class="slider-33900 slide-72868 owl-lazy" src="{{URL::asset('upload/3-compressor.jpg')}}" style="opacity: 1;">
                                                </a>
                                            </li>
                                        </div>
                                    <div class="owl-item" style="width: 785.219px;">
                                        <li style="display: initial; width: 100%;" class="slide-72868 ms-image item">
                                            <a href="{{route('FrontendPost',42)}}" target="_self">
                                                <img height="200" width="770" alt="" class="slider-33900 slide-72868 owl-lazy" src="{{URL::asset('upload/bs-ta-quang-mau.png')}}" style="opacity: 1;">
                                            </a>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 785.219px;">
                                        <li style="display: initial; width: 100%;" class="slide-72868 ms-image item">
                                            <a href="{{route('FrontendPost',43)}}" target="_self">
                                                <img height="200" width="770" alt="" class="slider-33900 slide-72868 owl-lazy" src="{{URL::asset('upload/photo_2020-08-27_11-00-11.jpg')}}" style="opacity: 1;">
                                            </a>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 785.219px;">
                                        <li style="display: initial; width: 100%;" class="slide-72868 ms-image item">
                                            <a href="{{route('FrontendPost',44)}}" target="_self">
                                                <img height="200" width="770" alt="" class="slider-33900 slide-72868 owl-lazy" src="{{URL::asset('upload/bs-nguyen-van-huyen-2.jpg')}}" style="opacity: 1;">
                                            </a>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 785.219px;">
                                        <li style="display: initial; width: 100%;" class="slide-72868 ms-image item">
                                            <a href="{{route('FrontendPost',47)}}" target="_self">
                                                <img height="200" width="770" alt="" class="slider-33900 slide-72868 owl-lazy" src="{{URL::asset('upload/bs-quynh-1-1.jpg')}}" style="opacity: 1;">
                                            </a>
                                        </li>
                                    </div>
                                    <div class="owl-item" style="width: 785.219px;">
                                        <li style="display: initial; width: 100%;" class="slide-72868 ms-image item">
                                            <a href="{{route('FrontendPost',47)}}" target="_self">
                                                <img height="200" width="770" alt="" class="slider-33900 slide-72868 owl-lazy" src="{{URL::asset('upload/bs-quynh-1-1.jpg')}}" style="opacity: 1;">
                                            </a>
                                        </li>
                                    </div>

                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="title_shadow_bvtc row3"><span>{{ trans('book-schedule.MENU.'.'TƯ VẤN TRỰC TUYẾN') }}</span></h2>
        <div class="sec17_col1_row3">
            <ul class="d_flex">
                <li>
                    <a href="#">
                        <img src="https://i1-suckhoe.vnecdn.net/2020/10/22/trung-tam-hy-vong-1603329226-5898-1603329690.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=RQdeHUALZmFGHVB-SrJCFQ" alt="Tư vấn trực tuyến">
                        <h4>{{ trans('book-schedule.MENU.'.'TƯ VẤN TRỰC TUYẾN') }}</h4>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="https://i1-suckhoe.vnecdn.net/2020/12/01/h1-1606816314-3637-1606816802.jpg?w=300&h=180&q=100&dpr=1&fit=crop&s=OQp6nuI-IQo5ChIsHNl-QQ" alt="Tư vấn khám chữa bệnh">
                        <h4>{{ trans('book-schedule.MENU.'.'TƯ VẤN KHÁM CHỮA BÊNH') }}</h4>
                    </a>
                </li>
            </ul>
        </div>
        <h2 class="title_shadow_bvtc row4"><span><a href="#">{{ trans('book-schedule.MENU.'.'TIN TỨC-SỰ KIỆN') }}</a></span></h2>
        <div class="sec17_col1_row4">
            <ul class="d_flex">
                <li class="d_flex">
                    <div class="thumb">
                        <div class="">
                            <img src="{{asset('upload/1607317853.jpg')}}" alt="phòng chống Covid-19">
                        </div>
{{--                        <a href="{{route('FrontendPost',68)}}" title="phòng chống Covid-19">--}}
{{--                            <img width="400" height="250"--}}
{{--                                 src="{{asset('upload/1607317853.jpg')}}"--}}
{{--                                 class="thumb-400x250 wp-post-image"--}}
{{--                                 alt="Bệnh viện ĐKQT Thu Cúc được công nhận là Bệnh viện an toàn trong phòng chống Covid-19">--}}
{{--                        </a>--}}
                    </div>
                    <div class="text m-1 w-100">
                        <h3>
                            <a href="https://vnexpress.net/benh-nhan-1342-la-f0-cua-ba-ca-nhiem-moi-tai-tp-hcm-4200007.html">
                                'Bệnh nhân 1342' là F0 của ba ca nhiễm mới tại TP HCM
                            </a>
                        </h3>
                        <p>
                            Điều tra dịch tễ xác định chuỗi lây nhiễm ba bệnh nhân 1347, 1348 và 1349 xuất phát từ "bệnh nhân 1342", tiếp viên của Vietnam Airlines.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sec17_col1_row5">
            <ul class="d_flex">
                @foreach($articlesWithImages as $articlesWithImage )
                <li class="d_flex">
                    <div class="thumb">
                        <a href="{{$articlesWithImage->url}}" title="{{$articlesWithImage->title}}">
                            <img width="300" height="300" src="{{$articlesWithImage->img}}">
                        </a>
                    </div>
                    <div class="text">
                        <h3>
                            <a href="{{$articlesWithImage->url}}">
                                {{$articlesWithImage->title}}
                            </a>
                        </h3>
                        <p> {{$articlesWithImage->content}}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="sec17_col1_row6">
            <ul class="d_flex">
                @foreach($articles as $article)
                <li class="d_flex">
                    <div class="text">
                        <h3>
                            <a href="{{$article->url}}">
                                {{$article->title}}
                            </a>
                        </h3>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
