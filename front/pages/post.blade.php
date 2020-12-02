@extends('layouts.postMaster')
@section('content')

<section class="container12 sec17" style="margin-top: 30px;margin-bottom: 50px">
    <div class="wrap">
        <div style="margin-top: 10px;margin-bottom: 1px">
            <p style="color: #2a7f49"><u>Trang chủ >>  @foreach($lsTag as $tag)
                        @if($tag->id == $post->tagId)
                            {{$tag->name}}
                        @endif
                    @endforeach>>{{$post->title}}</u></p>
        </div>
        <div>
            <p style="font-size: 30px;color: #2a7f49;margin-bottom: 5px"><strong>{{$post->title}}</strong></p>
        </div>

        <p>{!! $post->body !!}</p>
    </div>
</section>
@endsection
