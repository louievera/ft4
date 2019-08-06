@extends('layouts.app')

@section('styling')


@endsection

@section('content')

  <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-10">
        <h3>Articles</h3>
        <form method="get">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="search" name="search">
            <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
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
            <p class="text-right">{{ $posts->appends(request()->except('page'))->links()   }}</p>

      </div>
  </div>



@endsection
