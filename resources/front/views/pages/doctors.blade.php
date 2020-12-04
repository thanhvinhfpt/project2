@extends('layouts.master')
@section('content')
    <div id="primary">
        <p id="breadcrumbs"><span><span><a href="https://benhvienthucuc.vn/">Trang chủ</a> » <span><a href="https://benhvienthucuc.vn/gioi-thieu/">Giới thiệu</a> » <span class="breadcrumb_last" aria-current="page">Đội ngũ Bác sĩ</span></span></span></span></p>
        <div class="cat_title_h1">
            <h1 class="h1_title title_shadow_bvtc"><span>Đội ngũ Bác sĩ</span></h1>
        </div>
        <div class="list_post_cat">
            <ul>
                @foreach($lsDoctor as $doctor)
                <li>
                    <div class="thumb">
                        <a
                            href="https://benhvienthucuc.vn/thay-thuoc-uu-tu-tien-si-bac-si-nguyen-pham-y-nhi/"
                            title="{{'doctor '.$doctor->name}}">
                            <img
                                width="350" height="250" src="{{$doctor->image}}"
                                class="attachment-thumb-400x250 size-thumb-400x250 wp-post-image"
                                alt="{{'doctor '.$doctor->name}}">
                        </a>
                    </div>
                    <div class="text">
                        <h2>
                            <a href="#">
                                {{'Tiến sĩ, Thầy thuốc ưu tú, Bác sĩ Nguyễn Phạm Ý Nhi – Giám đốc Bệnh viện ĐKQT Thu Cúc '.$doctor->name}}
                            </a>
                        </h2>
                        <p>Giám đốc Bệnh viện Đa khoa Quốc tế Thu Cúc Khen thưởng: Thầy thuốc ưu tú, Huân chương lao động hạng ba, nhiều Bằng khen của Bộ trưởng Bộ y tế, Chủ tịch UBND thành phố Hà Nội trao tặng Là chuyên...</p>
                        <div class="desc d_flex">
                            <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 4.165</span>
                            <span class=""><i class="fa fa-clock-o" aria-hidden="true"></i> {{ time() }}</span>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="pagination">
            <div class="">
                <div class="pagenavi">
                    <span aria-current="page" class="page-numbers current">1</span>
                    <a class="page-numbers" href="#/2">2</a>
                    <span class="page-numbers dots">…</span>
                    <a class="page-numbers" href="#/2">12</a>
                    <a class="next page-numbers" href="#/2">»</a>
                </div>
            </div>
        </div>
    </div>
@endsection
