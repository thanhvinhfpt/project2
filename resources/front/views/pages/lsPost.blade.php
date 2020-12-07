@extends('layouts.master')
@section('content')
    <div id="primary">
        <p id="breadcrumbs"><span><span><a href="https://benhvienthucuc.vn/">Trang chủ</a> » <span><a
                            href="https://benhvienthucuc.vn/gioi-thieu/">Giới thiệu</a> » <span class="breadcrumb_last"
                                                                                                aria-current="page">{{$tag->name}}</span></span></span></span>
        </p>
        <div class="cat_title_h1">
            <h1 class="h1_title title_shadow_bvtc"><span>{{$tag->name}}</span></h1>
        </div>
        <div class="list_post_cat">
            <ul>
                @foreach($lsPost as $post)
                    <li>
                        <div class="thumb">
                            <a
                                href="{{route('FrontendPost',$post->id)}}"
                                title="{{$post->title}}">
                                <img
                                    width="350" height="250" src="{{asset($post->coverImage)}}"
                                    class="attachment-thumb-400x250 size-thumb-400x250 wp-post-image"
                                    alt="">
                            </a>
                        </div>
                        <div class="text">
                            <h2>
                                <a href="{{route('FrontendPost',$post->id)}}">
                                    {{$post->title}}
                                </a>
                            </h2>
                            <p> {!!   strip_tags(substr($post->body,0,500)) !!}...</p>
                            <div class="desc d_flex">
                                <span class=""><i class="fa fa-eye" aria-hidden="true"></i> 4.165</span>
                                <span class=""><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $post->updated_at }}</span>
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
                `  <div  > {{$lsPost->links("pagination::bootstrap-4")}}</div>
        </div>

        {{--        <div class="pagination">--}}
        {{--            <div class="">--}}
        {{--                <div class="pagenavi">--}}
        {{--                    <span aria-current="page" class="page-numbers current">1</span>--}}
        {{--                    <a class="page-numbers" href="#/2">2</a>--}}
        {{--                    <span class="page-numbers dots">…</span>--}}
        {{--                    <a class="page-numbers" href="#/2">12</a>--}}
        {{--                    <a class="next page-numbers" href="#/2">»</a>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>

@endsection
