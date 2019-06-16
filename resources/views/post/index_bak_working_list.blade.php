@extends('layouts.app')

@section('content')

    @foreach($posts->sortByDesc('created_at') as $post)
      <div class="row">

          <div class="col-md-1">
          </div>

          <div class="col-md-6">
              @if($post->image <> '')
                  <a href="{{ route('article_read', $post->slug) }}">
                      <img class="img-fluid" src="{{ asset( '/storage/'.($post->image) ) }}">
                  </a>
              @endif
          </div>

          <div class="col-md-4">
              <a href="{{ route('article_read', $post->slug) }}">
              <h3 class="post-title">{{ $post->title }}</h3></a>
              @if($post->author_id <> 0 )
                  <p class="post-meta">
                    Posted by {{ $post->author->name }} on {{ $post->created_at->format('F d, Y') }}
                  </p>
              @endif
              <p>{{ $post->excerpt }}</p>
          </div>

      </div>
      <hr>
    @endforeach
{{--
    {{ $posts->links()   }}
--}}
@endsection
