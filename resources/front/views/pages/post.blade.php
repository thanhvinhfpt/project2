@extends('layouts.postMaster')
@section('content')

<section class="container12 sec17" id="detailPost" style="margin: 0 30px 0 0;">
        <div>
            <p style="color: #2a7f49"><u>Trang chủ >>  @foreach($lsTag as $tag)
                        @if($tag->id == $post->tag_id)
                            {{$tag->name}}
                        @endif
                    @endforeach>>{{$post->title}}</u></p>
        </div>
        <div>
            <p style="font-size: 30px;color: #2a7f49;margin-bottom: 5px"><strong>{{$post->title}}</strong></p>
        </div>

        <p style="margin: 5px" class="content">{!! $post->body !!}</p>
</section>
@endsection
