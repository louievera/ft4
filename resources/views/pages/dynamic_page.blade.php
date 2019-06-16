@extends('layouts.app')

@section('metatags')
    <meta property="og:url"                content="{{ route('page_read', $page->slug) }}" />
    <meta property="og:image"              content="{{ asset( '/storage/'.($page->image) ) }}" />
    <meta property="og:title"              content="{{ $page->title }}" />
@if($page->excerpt <> '')
    <meta property="og:description"        content="{{ $page->excerpt }}" />
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

    {!! $page->body !!}
    <hr>
    <a href="{{ url()->previous() }}"><p class="text-center"><i class="fas fa-step-backward"></i> Back</p></a>
    <hr>

@endsection
