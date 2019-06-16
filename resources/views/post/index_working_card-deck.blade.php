@extends('layouts.app')

@section('styling')


@endsection

@section('content')

  <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-10">

        @foreach($posts->chunk(3) as $chunked_posts)

            <div class="card-deck">

            @foreach($chunked_posts as $individual_post)

                    <div class="card bg-inverse">
                        <img class="card-img" src="{{ asset( '/storage/'.($individual_post->image) ) }}">
                        <a href="{{ route('article_read', $individual_post->slug) }}">
                        <div class="card-img-overlay d-flex align-items-end">
                            <h4 class="card-title">{{ $individual_post->title }}</h4>
                        </div>
                        </a>
                    </div>

            @endforeach

            </div>
            <hr>

        @endforeach

        <p class="text-right">{{ $posts->links()   }}</p>

      </div>
  </div>



@endsection
