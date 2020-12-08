@extends('layouts.postMaster')
@section('content')
    <div id="primary">
        
        <div class="">
            <h1 >Có <span style="font-weight:600">{{$count}}</span> kết quả tìm kiếm cho : <span style="green">"{{$search}}"</span> </h1>
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
            
        </div>
        {{$lsPost-> appends(['s'=>$search])->links("pagination::bootstrap-4")}}
    </div>

@endsection
