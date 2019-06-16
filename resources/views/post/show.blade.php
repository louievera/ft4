@extends('layouts.app')

@section('metatags')
    <meta property="og:url"                content="{{ route('article_read', $post->slug) }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:image"              content="{{ asset( '/storage/'.($post->image) ) }}" />
    <meta property="og:title"              content="{{ $post->title }}" />
@if($post->excerpt <> '')
    <meta property="og:description"        content="{{ $post->excerpt }}" />
@endif
@endsection

@section('styling')
    <style>
      img {
        max-width: 100%;
        height: auto;
      }
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
            <img class="img-fluid mx-auto d-block" src="{{ asset( '/storage/'.($post->image) ) }}" width="100%" />
            <hr>
            <h3>{{ $post->title }}</h3>
            @if($post->author_name <> '')
                <p>By {{ $post->author_name }}</p>
            @endif
            <hr>
            {{--
            <h5><p>Updated on {{ $post->updated_at->format('F d, Y') }}</p></h5>
            --}}
            {!! $post->body !!}

            <hr>
            <a href="{{ url()->previous() }}"><p class="text-center"><i class="fas fa-step-backward"></i> Back</p></a>
            <hr>
        </div>
    </div>

@endsection
