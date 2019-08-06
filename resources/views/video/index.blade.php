@extends('layouts.app')

@section('styling')


@endsection

@section('content')

  <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-10">
      <h3>Videos</h3>
      <form method="get">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="search" name="search">
          <button class="btn btn-danger" type="submit">Search</button>
        </div>
      </form>
        @foreach($videos->chunk(3) as $chunked_videos)

            <div class="card-deck">

            @foreach($chunked_videos as $individual_video)

                    <div class="card bg-inverse">
                        <img class="card-img" src="https://img.youtube.com/vi/{{ $individual_video->embedlink }}/mqdefault.jpg">
                        <a href="{{ route('video_read', $individual_video->slug) }}">
                        <div class="card-img-overlay">
                            <p class="card-title d-inline-flex">{{ $individual_video->title }}</p>
                        </div>
                        </a>
                    </div>

            @endforeach

            </div>
            <hr>

        @endforeach

        <p class="bg-dark text-center">{{ $videos->appends(request()->except('page'))->links() }}</p>

      </div>
  </div>



@endsection
