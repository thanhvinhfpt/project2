<header id="header" class="header main-navigation main_menu menu_fixed animated fadeInDown">
    <section class="container12 sec11">
        <div class="wrap">
            <div class="d_flex">
                <!-- Contact -->
                <div class="sec11_col1 d_flex">
                    <span class="sp1">
                        <a href="mailto:{{SiteHelper::$email_contact}}">{{SiteHelper::$email_contact}}</a>
                    </span>
                    <span class="sp2">

                        <a href="tel:{{SiteHelper::$phone_contact}}">{{SiteHelper::$phone_contact}} </a>
                    </span>
                    <span class="sp1">
                         <strong>Ngôn ngữ :</strong>
                        <a href="/lang/vi"><img src="{{asset('upload/vi.jpg')}}"></a>
                        <a href="/lang/en"><img src="{{asset('upload/en.jpg')}}"></a>
                    </span>

                </div>
                <!-- End Contact -->

                <!-- Search -->
                <div class="sec11_col2 d_flex">
                    <div class="sec11_col2_col1">
                        <form action="/" method="get" id="searchform">
                            <label>
                                <span>
                                    <em style="opacity: 0">{{ trans('book-schedule.SEARCH_BOX_LABEL') }}</em>
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                                <input
                                    type="text"
                                    name="s"
                                    placeholder="{{ trans('book-schedule.SEARCH_BOX_LABEL') }}"
                                    autocomplete="off"
                                >
                            </label>
                        </form>
                    </div>
                    <div class="sec11_col2_col2">
                        <a
                            href="{{ trans('book-schedule.URL_FACEBOOK') }}"
                            target="_blank"
                            rel="noopener"
                            title="{{ trans('book-schedule.TOOL_TIP_ICON_FACEBOOK') }}"
                            class="external">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a
                            href="{{ trans('book-schedule.URL_YOU_TUBE') }}"
                            target="_blank"
                            rel="noopener" title="{{ trans('book-schedule.TOOL_TIP_ICON_YOU_TUBE') }}" class="external">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container12 sec12">
        <div class="wrap">
            <div class="d_flex">
                <div class="sec12_col1">
                    <a
                        href="{{route('homefrontEnd')}}
                            "
                        title="{{ trans('book-schedule.TOOL_TIP_IMAGE_01') }}">
                        <img
                            src="{{asset('assets/img/header/header_hospital_01.jpg')}}"
                            alt="{{ trans('book-schedule.TOOL_TIP_IMAGE_01') }}">
                    </a>
                </div>
                <div class="sec12_col2">
                    <img
                        src="{{asset('assets/img/header/header_hospital_02.png')}}"
                        alt="{{ trans('book-schedule.TOOL_TIP_IMAGE_02') }}">
                </div>
            </div>
        </div>
    </section>
    <section class="container12 sec13">
        <div class="wrap">
            <div class="">
                <div class="main-menu-top">
                    <ul id="menu-main-menu" class="menu">
                        <li class="menu-item menu-item-has-children">
                            <a>{{ trans('book-schedule.MENU.Giới thiệu') }}</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{route('lsPost','Đội Ngũ Bác Sĩ')}}">{{ trans('book-schedule.MENU.'.'Đội ngũ Bác sĩ') }}</a></li>
                                @foreach($gioithieuchung as $post)
                                    <li class="menu-item"><a href="/frontEnd/{{$post->id}}">{{ trans('book-schedule.MENU.'.$post->title) }}</a></li>
                                @endforeach


                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="https://google.com.vn/chuyen-khoa/">{{ trans('book-schedule.MENU.SPECIALIST') }}</a>
                            <ul class="sub-menu" style="width: 550px">
                                @foreach($gioithieukhoa as $post)
                                    <li style="width: 50%" class="menu-item"><a href="/frontEnd/{{$post->id}}">{{ trans('book-schedule.MENU.'.$post->title) }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">{{ trans('book-schedule.MENU.'.'Dịch vụ y tế') }}</a>
                            <ul class="sub-menu">
                                @foreach($dichvuyte as $post)
                                    <li class="menu-item"><a href="/frontEnd/{{$post->id}}">{{ trans('book-schedule.MENU.'.$post->title) }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item current-menu-ancestor menu-item-has-children">
                            <a> {{ trans('book-schedule.MENU.'.'Đặt khám online') }}</a>
                            <ul class="sub-menu">
                                <li class="menu-item current-menu-item">
                                    {{--                                     TODO: add router to navigate to booking page--}}
                                    <a href="{{route('bookSchedule')}}" aria-current="page">

                                        {{ trans('book-schedule.MENU.'.'Đặt lịch hẹn') }}
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="tel:123-456-7890">{{ trans('book-schedule.MENU.'.'Liên hệ') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item"><a>{{ trans('book-schedule.MENU.'.'HỎI ĐÁP CHUYÊN GIA') }}</a></li>
                        <li class="menu-item menu-item-has-children">
                            <a>{{ trans('book-schedule.MENU.'.'Hỗ trợ khách hàng') }}</a>
                            <ul class="sub-menu">
                                @foreach($Hotrokhachhang as $post)
                                    <li class="menu-item"><a href="/frontEnd/{{$post->id}}">{{ trans('book-schedule.MENU.'.$post->title) }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a>{{ trans('book-schedule.MENU.NEWS') }}</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="#">{{ trans('book-schedule.MENU.'.'Đấu thầu') }}
                                    </a></li>
                                <li class="menu-item">
                                    <a href="#">{{ trans('book-schedule.MENU.'.'Tin nóng Covid 19') }}
                                    </a></li>
                                <li class="menu-item">
                                    <a href="#"> {{ trans('book-schedule.MENU.'.'Tin tuyển dụng') }}
                                    </a></li>
                                <li class="menu-item">
                                    <a href="#">{{ trans('book-schedule.MENU.'.'Báo chí nói về Thu Cúc') }}
                                    </a></li>
                                <li class="menu-item">
                                    <a href="#">{{ trans('book-schedule.MENU.'.'Tư vấn trực tuyến') }}
                                    </a></li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="#">{{ trans('book-schedule.MENU.CONTACT') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


</header>

