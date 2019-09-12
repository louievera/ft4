@extends('layouts.app')

@section('styling')


@endsection

@section('content')

  <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-10">
      <div class='row'>
        <div class='col-xs-3 mr-2'>
          <h3>Videos</h3>
        </div>
        <div class='card bg-inrverse'>
          <form method="get">
            <div class="input-group mb-1">
              <input type="text" class="form-control mr-1" placeholder="search" name="search">
              <button class="btn btn-danger" type="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
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
