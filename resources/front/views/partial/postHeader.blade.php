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
                        href="#"
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
                            <a>{{ trans('book-schedule.MENU.INTRODUCTION') }}</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{route('FrontendPost',6)}}">Lời giới thiệu</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',7)}}">Sứ mệnh và tầm nhìn</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',8)}}">Cơ sở vật chất</a></li>
                                <li class="menu-item"><a href="#">Đội ngũ Bác sĩ</a></li>
                                <li class="menu-item"><a href="#">Hoạt động bệnh viện</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',9)}}">Văn hóa Thu cúc</a></li>
                                <li class="menu-item"><a href="#">Thư viện hình ảnh</a></li>

                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Chuyên khoa</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{route('FrontendPost',10)}}">Khoa phụ sản</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',11)}}">Chuyên khoa gan mật</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',12)}}">Chuyên khoa tiêu hóa</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',13)}}">Chuyên khoa cơ xương khớp</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',14)}}">Chuyên khoa tai mũi họng</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',15)}}">Chuyên khoa Da liễu</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',16)}}">Chuyên khoa Mắt </a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',17)}}">Khoa dược</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',18)}}">Đơn vị chuẩn đoán hình ảnh</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',19)}}">Phòng cấp cứu</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',20)}}">Khoa ngoại</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',21)}}">Chuyên khoa tim mạch</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',22)}}">Chuyên khoa nội tiết</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',23)}}">Chuyên khoa nhi</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',24)}}">Khoa răng hàm mặt</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',25)}}">Chuyên khoa nội thần kinh</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',26)}}">Chuyên khoa hô hấp</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',27)}}">Đơn vị xét nghiệm</a></li>
                                <li class="menu-item"><a href="{{route('FrontendPost',28)}}">Khu vực điều trị</a></li>



                            </ul>
                        </li>
                        <li class="menu-item current-menu-ancestor menu-item-has-children">
                            <a>Đặt khám online</a>
                            <ul class="sub-menu">
                                <li class="menu-item current-menu-item">
                                    {{--                                     TODO: add router to navigate to booking page--}}
                                    <a href="{{route('bookSchedule')}}" aria-current="page">

                                        {{ trans('book-schedule.MENU.BOOKING') }}
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="tel:123-456-7890">{{ trans('book-schedule.MENU.PHONE') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a>{{ trans('book-schedule.MENU.SUPPORT') }}</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="{{ trans('book-schedule.MENU.PRICE_MOCK_URL') }}">
                                        {{ trans('book-schedule.MENU.SUPPORT_PRICE') }}
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a>{{ trans('book-schedule.MENU.NEWS') }}</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="{{ trans('book-schedule.MENU.MOCK_URL_COVID') }}">
                                        {{ trans('book-schedule.MENU.NEWS_COVID') }}
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
{{--    <section class="container12 sec14">--}}
{{--        <div class="wrap">--}}
{{--            <div class="">--}}
{{--                <div id="metaslider-id-33899" style="max-width: 1240px;"--}}
{{--                     class="ml-slider-3-18-8 metaslider metaslider-flex metaslider-33899 ml-slider slide-home">--}}
{{--                    <div id="metaslider_container_33899">--}}
{{--                        <div id="metaslider_33899" class="flexslider">--}}
{{--                            <ul aria-live="polite" class="slides owl-carousel owl-theme owl-loaded owl-drag">--}}
{{--                                <div class="owl-stage-outer">--}}
{{--                                    <div class="owl-stage"--}}
{{--                                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 4590px;">--}}
{{--                                        <div class="owl-item active" style="width: 459px;">--}}
{{--                                            <li style="display: initial; width: 100%;"--}}
{{--                                                class="slide-167809 ms-image item"><a--}}
{{--                                                    href="https://benhvienthucuc.vn/hoi-thao-thai-san/"--}}
{{--                                                    target="_self"><img alt="Hội thảo sơ cấp cứu cho mẹ bầu 18/11/2020"--}}
{{--                                                                        class="slider-33899 slide-167809 owl-lazy"--}}
{{--                                                                        title="1240-400-chuong-trinh-thai-san-thang-11"--}}
{{--                                                                        data-src="https://benhvienthucuc.vn/wp-content/uploads/2020/11/1240-400-chuong-trinh-thai-san-thang-11.jpg"--}}
{{--                                                                        src="https://benhvienthucuc.vn/wp-content/uploads/2020/11/1240-400-chuong-trinh-thai-san-thang-11.jpg"--}}
{{--                                                                        style="opacity: 1;"></a></li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item" style="width: 459px;">--}}
{{--                                            <li style="display: initial; width: 100%;"--}}
{{--                                                class="slide-148620 ms-image item"><a--}}
{{--                                                    href="https://ungbuouvietnam.com/lich-kham-bac-si-singapore/"--}}
{{--                                                    target="_blank" class="external external_link_img"--}}
{{--                                                    rel="noopener"><img--}}
{{--                                                        alt="điều trị ung thư đại tràng, dạ dày thực quản"--}}
{{--                                                        class="slider-33899 slide-148620 owl-lazy"--}}
{{--                                                        title="1240_400_bs-zee-thang-11_v4"--}}
{{--                                                        data-src="https://benhvienthucuc.vn/wp-content/uploads/2020/11/1240_400_bs-zee-thang-11_v4.jpg"></a>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item" style="width: 459px;">--}}
{{--                                            <li style="display: initial; width: 100%;"--}}
{{--                                                class="slide-163848 ms-image item"><a--}}
{{--                                                    href="https://benhvienthucuc.vn/uu-dai/noi-soi-tieu-hoa-ung-dung-cong-nghe-dot-pha/"--}}
{{--                                                    target="_self"><img alt="Nội soi dạ dày đại tràng"--}}
{{--                                                                        class="slider-33899 slide-163848 owl-lazy"--}}
{{--                                                                        title="1240X400-benh-tieu-hoa"--}}
{{--                                                                        data-src="https://benhvienthucuc.vn/wp-content/uploads/2020/11/1240X400-benh-tieu-hoa.jpg"></a>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item" style="width: 459px;">--}}
{{--                                            <li style="display: initial; width: 100%;"--}}
{{--                                                class="slide-163011 ms-image item"><a--}}
{{--                                                    href="https://benhvienthucuc.com/uu-dai/tan-soi-cong-nghe-cao-danh-bay-soi-tiet-nieu/"--}}
{{--                                                    target="_blank" class="external external_link_img"--}}
{{--                                                    rel="noopener"><img alt="đau sỏi thận sỏi tiết niệu"--}}
{{--                                                                        class="slider-33899 slide-163011 owl-lazy"--}}
{{--                                                                        title="tan-soi-12404001112"--}}
{{--                                                                        data-src="https://benhvienthucuc.vn/wp-content/uploads/2020/11/tan-soi-12404001112.jpg"></a>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item" style="width: 459px;">--}}
{{--                                            <li style="display: initial; width: 100%;"--}}
{{--                                                class="slide-150994 ms-image item"><a--}}
{{--                                                    href="https://benhvienthucuc.vn/uu-dai/day-lui-benh-tieu-hoa-nhanh-chong/"--}}
{{--                                                    target="_blank"><img--}}
{{--                                                        alt="https://benhvienthucuc.com/day-lui-benh-tieu-hoa-nhanh-chong/"--}}
{{--                                                        class="slider-33899 slide-150994 owl-lazy" title="1240_400_v22"--}}
{{--                                                        data-src="https://benhvienthucuc.vn/wp-content/uploads/2020/10/1240_400_v22.jpg"></a>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item" style="width: 459px;">--}}
{{--                                            <li style="display: initial; width: 100%;"--}}
{{--                                                class="slide-162181 ms-image item"><a--}}
{{--                                                    href="https://benhvienthucuc.vn/uu-dai/noi-soi-tieu-hoa-ung-dung-cong-nghe-dot-pha/"--}}
{{--                                                    target="_self"><img alt="NỘI SOI DẠ DÀY ĐẠI TRÀNG"--}}
{{--                                                                        class="slider-33899 slide-162181 owl-lazy"--}}
{{--                                                                        title="1240_400"--}}
{{--                                                                        data-src="https://benhvienthucuc.vn/wp-content/uploads/2020/10/1240_400.jpg"></a>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item" style="width: 459px;">--}}
{{--                                            <li style="display: initial; width: 100%;"--}}
{{--                                                class="slide-163016 ms-image item"><a--}}
{{--                                                    href="https://benhvienthucuc.com/uu-dai/tu-van-dieu-tri-tri-phac-do-toan-dien-khong-dau/"--}}
{{--                                                    target="_blank" class="external external_link_img"--}}
{{--                                                    rel="noopener"><img alt="chấm dứt trĩ"--}}
{{--                                                                        class="slider-33899 slide-163016 owl-lazy"--}}
{{--                                                                        title="cham-dut-tri"--}}
{{--                                                                        data-src="https://benhvienthucuc.vn/wp-content/uploads/2020/11/cham-dut-tri.jpg"></a>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item" style="width: 459px;">--}}
{{--                                            <li style="display: initial; width: 100%;"--}}
{{--                                                class="slide-145835 ms-image item"><a--}}
{{--                                                    href="https://benhvienthucuc.com/chua-xo-gan-viem-gan-b/"--}}
{{--                                                    target="_blank" class="external external_link_img"--}}
{{--                                                    rel="noopener"><img--}}
{{--                                                        alt="Chiến thắng viêm gan B - xơ gan cùng bác sĩ giỏi"--}}
{{--                                                        class="slider-33899 slide-145835 owl-lazy"--}}
{{--                                                        title="banner1240x400-compressor"--}}
{{--                                                        data-src="https://benhvienthucuc.vn/wp-content/uploads/2020/05/banner1240x400-compressor.png"></a>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item" style="width: 459px;">--}}
{{--                                            <li style="display: initial; width: 100%;"--}}
{{--                                                class="slide-122223 ms-image item"><a--}}
{{--                                                    href="https://benhvienthucuc.com/km/kham-cho-tre-tan-tinh-han-che-khang-sinh/"--}}
{{--                                                    target="_blank" class="external external_link_img"--}}
{{--                                                    rel="noopener"><img alt="Khám tận tình cho bé"--}}
{{--                                                                        class="slider-33899 slide-122223 owl-lazy"--}}
{{--                                                                        title="1240x400-compressor"--}}
{{--                                                                        data-src="https://benhvienthucuc.vn/wp-content/uploads/2019/03/1240x400-compressor.png"></a>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                        <div class="owl-item" style="width: 459px;">--}}
{{--                                            <li style="display: initial; width: 100%;"--}}
{{--                                                class="slide-145710 ms-image item"><a--}}
{{--                                                    href="https://benhvienthucuc.com/km/cat-amidan-nao-va-phuong-phap-moi-nhat/"--}}
{{--                                                    target="_blank" class="external external_link_img"--}}
{{--                                                    rel="noopener"><img--}}
{{--                                                        alt="Cắt amidan - nạo VA bằng công nghệ Plasma Plus"--}}
{{--                                                        class="slider-33899 slide-145710 owl-lazy"--}}
{{--                                                        title="Bannerweb_1240_400-compressor"--}}
{{--                                                        data-src="https://benhvienthucuc.vn/wp-content/uploads/2020/05/Bannerweb_1240_400-compressor.png"></a>--}}
{{--                                            </li>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="owl-nav">--}}
{{--                                    <button type="button" role="presentation" class="owl-prev disabled">--}}
{{--                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#fff" width="16"--}}
{{--                                             height="16" viewBox="0 0 32 32">--}}
{{--                                            <path--}}
{{--                                                d="M8.409 14.591c-0.778 0.778-0.776 2.041 0 2.817l14.003 14.003c0.786 0.786 2.049 0.782 2.829 0.001 0.787-0.787 0.781-2.048-0.001-2.83l-12.583-12.583 12.583-12.583c0.787-0.786 0.782-2.049 0.001-2.829-0.786-0.787-2.048-0.781-2.829 0.001l-14.003 14.003z"></path>--}}
{{--                                        </svg>--}}
{{--                                    </button>--}}
{{--                                    <button type="button" role="presentation" class="owl-next">--}}
{{--                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#fff" width="16"--}}
{{--                                             height="16" viewBox="0 0 32 32">--}}
{{--                                            <path--}}
{{--                                                d="M24.42 17.409c0.778-0.778 0.776-2.041 0-2.817l-14.003-14.003c-0.786-0.786-2.049-0.782-2.829-0.001-0.787 0.787-0.781 2.048 0.001 2.83l12.583 12.583-12.583 12.583c-0.787 0.786-0.782 2.049-0.001 2.829 0.786 0.787 2.048 0.781 2.829-0.001l14.003-14.003z"></path>--}}
{{--                                        </svg>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="owl-dots disabled">--}}
{{--                                    <button role="button" class="owl-dot active"><span></span></button>--}}
{{--                                    <button role="button" class="owl-dot"><span></span></button>--}}
{{--                                    <button role="button" class="owl-dot"><span></span></button>--}}
{{--                                    <button role="button" class="owl-dot"><span></span></button>--}}
{{--                                    <button role="button" class="owl-dot"><span></span></button>--}}
{{--                                    <button role="button" class="owl-dot"><span></span></button>--}}
{{--                                    <button role="button" class="owl-dot"><span></span></button>--}}
{{--                                    <button role="button" class="owl-dot"><span></span></button>--}}
{{--                                    <button role="button" class="owl-dot"><span></span></button>--}}
{{--                                    <button role="button" class="owl-dot"><span></span></button>--}}
{{--                                </div>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="container12 sec15">--}}
{{--        <div class="wrap">--}}
{{--            <div class="">--}}
{{--                <div class="sec15_owl owl-carousel owl-theme owl-loaded owl-drag">--}}
{{--                    <div class="owl-stage-outer">--}}
{{--                        <div class="owl-stage"--}}
{{--                             style="transform: translate3d(-464px, 0px, 0px); transition: all 0s ease 0s; width: 1702px;">--}}
{{--                            <div class="owl-item cloned" style="width: 149.667px; margin-right: 5px;">--}}
{{--                                <div class="item sec15_col"><span> <a href="/kham-suc-khoe-doanh-nghiep/"> <img--}}
{{--                                                class="owl-lazy"--}}
{{--                                                src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_6.jpg"--}}
{{--                                                data-src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_6.jpg"--}}
{{--                                                alt="Khám sức khỏe doanh nghiệp" style="opacity: 1;"> </a> </span>--}}
{{--                                    <h3><a href="/kham-suc-khoe-doanh-nghiep/" style="letter-spacing: -1px;">Khám sức--}}
{{--                                            khỏe doanh nghiệp</a></h3></div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item cloned" style="width: 149.667px; margin-right: 5px;">--}}
{{--                                <div class="item sec15_col"><span> <a class="modal__open"--}}
{{--                                                                      data-modal-button="modal_1"> <img class="owl-lazy"--}}
{{--                                                                                                        src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_3.jpg"--}}
{{--                                                                                                        data-src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_3.jpg"--}}
{{--                                                                                                        alt="Bảo hiểm"--}}
{{--                                                                                                        style="opacity: 1;"> </a> </span>--}}
{{--                                    <h3><a class="modal__open" data-modal-button="modal_1">Bảo hiểm</a></h3></div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item cloned" style="width: 149.667px; margin-right: 5px;">--}}
{{--                                <div class="item sec15_col"><span> <a class="modal__open"--}}
{{--                                                                      data-modal-button="modal_2"> <img class="owl-lazy"--}}
{{--                                                                                                        src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_4.jpg"--}}
{{--                                                                                                        data-src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_4.jpg"--}}
{{--                                                                                                        alt="Đặt hẹn khám bệnh"--}}
{{--                                                                                                        style="opacity: 1;"> </a> </span>--}}
{{--                                    <h3><a class="modal__open" data-modal-button="modal_2">Đặt hẹn khám bệnh</a></h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item active" style="width: 149.667px; margin-right: 5px;">--}}
{{--                                <div class="item sec15_col"><span> <a href="/goi-kham-suc-khoe/"> <img class="owl-lazy"--}}
{{--                                                                                                       src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_1.jpg"--}}
{{--                                                                                                       data-src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_1.jpg"--}}
{{--                                                                                                       alt="Các gói khám sức khỏe"--}}
{{--                                                                                                       style="opacity: 1;"> </a> </span>--}}
{{--                                    <h3><a href="/goi-kham-suc-khoe/">Các gói khám sức khỏe</a></h3></div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item active" style="width: 149.667px; margin-right: 5px;">--}}
{{--                                <div class="item sec15_col"><span> <a href="/cac-goi-kham-tam-soat-ung-thu/"> <img--}}
{{--                                                class="owl-lazy"--}}
{{--                                                src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_2.jpg"--}}
{{--                                                data-src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_2.jpg"--}}
{{--                                                alt="Tầm soát ung thư" style="opacity: 1;"> </a> </span>--}}
{{--                                    <h3><a href="/cac-goi-kham-tam-soat-ung-thu/">Tầm soát ung thư</a></h3></div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item active" style="width: 149.667px; margin-right: 5px;">--}}
{{--                                <div class="item sec15_col"><span> <a href="/kham-suc-khoe-doanh-nghiep/"> <img--}}
{{--                                                class="owl-lazy"--}}
{{--                                                src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_6.jpg"--}}
{{--                                                data-src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_6.jpg"--}}
{{--                                                alt="Khám sức khỏe doanh nghiệp" style="opacity: 1;"> </a> </span>--}}
{{--                                    <h3><a href="/kham-suc-khoe-doanh-nghiep/" style="letter-spacing: -1px;">Khám sức--}}
{{--                                            khỏe doanh nghiệp</a></h3></div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item" style="width: 149.667px; margin-right: 5px;">--}}
{{--                                <div class="item sec15_col"><span> <a class="modal__open"--}}
{{--                                                                      data-modal-button="modal_1"> <img class="owl-lazy"--}}
{{--                                                                                                        src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_3.jpg"--}}
{{--                                                                                                        data-src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_3.jpg"--}}
{{--                                                                                                        alt="Bảo hiểm"--}}
{{--                                                                                                        style="opacity: 1;"> </a> </span>--}}
{{--                                    <h3><a class="modal__open" data-modal-button="modal_1">Bảo hiểm</a></h3></div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item" style="width: 149.667px; margin-right: 5px;">--}}
{{--                                <div class="item sec15_col"><span> <a class="modal__open"--}}
{{--                                                                      data-modal-button="modal_2"> <img class="owl-lazy"--}}
{{--                                                                                                        src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_4.jpg"--}}
{{--                                                                                                        data-src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_4.jpg"--}}
{{--                                                                                                        alt="Đặt hẹn khám bệnh"--}}
{{--                                                                                                        style="opacity: 1;"> </a> </span>--}}
{{--                                    <h3><a class="modal__open" data-modal-button="modal_2">Đặt hẹn khám bệnh</a></h3>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item cloned" style="width: 149.667px; margin-right: 5px;">--}}
{{--                                <div class="item sec15_col"><span> <a href="/goi-kham-suc-khoe/"> <img class="owl-lazy"--}}
{{--                                                                                                       src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_1.jpg"--}}
{{--                                                                                                       data-src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_1.jpg"--}}
{{--                                                                                                       alt="Các gói khám sức khỏe"--}}
{{--                                                                                                       style="opacity: 1;"> </a> </span>--}}
{{--                                    <h3><a href="/goi-kham-suc-khoe/">Các gói khám sức khỏe</a></h3></div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item cloned" style="width: 149.667px; margin-right: 5px;">--}}
{{--                                <div class="item sec15_col"><span> <a href="/cac-goi-kham-tam-soat-ung-thu/"> <img--}}
{{--                                                class="owl-lazy"--}}
{{--                                                src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_2.jpg"--}}
{{--                                                data-src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_2.jpg"--}}
{{--                                                alt="Tầm soát ung thư" style="opacity: 1;"> </a> </span>--}}
{{--                                    <h3><a href="/cac-goi-kham-tam-soat-ung-thu/">Tầm soát ung thư</a></h3></div>--}}
{{--                            </div>--}}
{{--                            <div class="owl-item cloned" style="width: 149.667px; margin-right: 5px;">--}}
{{--                                <div class="item sec15_col"><span> <a href="/kham-suc-khoe-doanh-nghiep/"> <img--}}
{{--                                                class="owl-lazy"--}}
{{--                                                src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_6.jpg"--}}
{{--                                                data-src="https://benhvienthucuc.vn/wp-content/themes/benh-vien-thu-cuc-vn/assets/images/sec15_6.jpg"--}}
{{--                                                alt="Khám sức khỏe doanh nghiệp" style="opacity: 1;"> </a> </span>--}}
{{--                                    <h3><a href="/kham-suc-khoe-doanh-nghiep/" style="letter-spacing: -1px;">Khám sức--}}
{{--                                            khỏe doanh nghiệp</a></h3></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="owl-nav disabled">--}}
{{--                        <button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i>--}}
{{--                        </button>--}}
{{--                        <button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    <div class="owl-dots">--}}
{{--                        <button role="button" class="owl-dot active"><span></span></button>--}}
{{--                        <button role="button" class="owl-dot"><span></span></button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
</header>

