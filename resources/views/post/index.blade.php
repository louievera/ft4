@extends('layouts.app')

@section('styling')


@endsection

@section('content')

  <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-10">

            <div class="card-columns">
            @foreach($posts as $individual_post)
                @if($individual_post->status == 'PUBLISHED')
                    <div class="card bg-inverse">
                        <img class="card-img" src="{{ asset( '/storage/'.($individual_post->image) ) }}">
                        <a href="{{ route('article_read', $individual_post->slug) }}">
                        <div class="card-img-overlay d-flex align-items-end">
                            <p class="card-title">{{ $individual_post->title }}</p>
                        </div>
                        </a>
                    </div>
                @endif
            @endforeach
            </div>
            <hr>
            <p class="text-right">{{ $posts->links()   }}</p>

      </div>
  </div>



@endsection
