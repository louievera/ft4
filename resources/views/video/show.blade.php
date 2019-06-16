@extends('layouts.app')

@section('metatags')
    <meta property="og:url"                content="{{ route('video_read', $video->slug) }}" />
    <meta property="og:type"               content="video.other" />
    <meta property="og:image"              content="https://img.youtube.com/vi/{{ $video->embedlink }}/maxresdefault.jpg" />
    <meta property="og:title"              content="{{ $video->title }}" />
  @if($video->desc <> '')
    <meta property="og:description"        content="{{ $video->desc }}" />
  @endif
@endsection

@section('styling')
    <style>
        a {
            color: #f5f104;
        }
        a:hover {
            color: #9A1010;
        }
    </style>
@endsection

@section('content')
  
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    {{--
                    <img class="img-fluid mx-auto d-block" src="{{ asset( '/storage/'.($video->image) ) }}" width="100%" />
                    <hr>
                    <h5><p>Posted by {{ $video->author->name }} on {{ $video->created_at->format('F d, Y') }}</p></h5>
                    {!! $video->embedlink !!}
                    --}}


                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video->embedlink }}" allowfullscreen></iframe>
                    </div>
                    <hr>
                    <a href="{{ url()->previous() }}"><p class="text-center"><i class="fas fa-step-backward"></i> Back</p></a>
                    <hr>
                </div>
            </div>

@endsection
