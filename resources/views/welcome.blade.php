@extends('layouts.app')

@section('metatags')
    <meta property="og:url"                content="https://www.fliptop.com.ph" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="FlipTop Battle League" />
    <meta property="og:image"              content="{{ asset('images/carousel/isabuhay2018_bracket_round2.jpg') }}" />
@endsection

@section('highlight')
            <div class="content col-10 offset-1">
                <div id="ftcarousel" class="carousel slide border border-white" data-ride="carousel" data-pause="hover">
                  <ol class="carousel-indicators">
                  <!-- @foreach($images as $image)
                    <li data-target="#ftcarousel" data-slide-to="{{$loop->count}}" @if($loop->first) class="active" @endif ></li>
                    
                  @endforeach -->
                    <li data-target="#ftcarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#ftcarousel" data-slide-to="1"></li>
                    <li data-target="#ftcarousel" data-slide-to="2"></li>
                    <li data-target="#ftcarousel" data-slide-to="3"></li>
                    <li data-target="#ftcarousel" data-slide-to="4"></li>
                    <li data-target="#ftcarousel" data-slide-to="5"></li>
                    <li data-target="#ftcarousel" data-slide-to="6"></li>
                    <li data-target="#ftcarousel" data-slide-to="7"></li>
                  </ol>
                  <div class="carousel-inner">
                  <!-- @foreach($images as $image)
                    <div @if($loop->first) class="carousel-item active" @else class="carousel-item" @endif >
                      <a href="{{ $image->link }}"><img class="d-block w-100" src="{{ asset('storage'.($image->image)) }}"></a>
                    </div>
                  @endforeach -->
                    
                    <div class="carousel-item active">
                      <a href="/promos"><img class="d-block w-100" src="{{ asset('images/carousel/Unibersikulo6c.jpg') }}"></a>
                    </div>
                    <div class="carousel-item">
                      <a href="/promos"><img class="d-block w-100" src="{{ asset('images/carousel/isabuhay2018_bracket_round2.jpg') }}"></a>
                    </div>
                    <div class="carousel-item">
                      <a href="/fliptop_radio_station2" target="blank"><img class="d-block w-100" src="{{ asset('images/carousel/radio_playlists.jpg') }}"></a>
                    </div>
                    <div class="carousel-item">
                      <a href="videos"><img class="d-block w-100" src="{{ asset('images/carousel/new_vid_seg.jpg') }}"></a>
                    </div>
                    <div class="carousel-item">
                      <a href="{{ route('register') }}"><img class="d-block w-100" src="{{ asset('images/carousel/registernow.jpg') }}"></a>
                    </div>
                    <div class="carousel-item">
                      <a href="{{ route('article_browse') }}"><img class="d-block w-100" src="{{ asset('images/carousel/ftarticles.jpg') }}" alt="2"></a>
                    </div>
                    <div class="carousel-item">
                      <a href="{{ route('video_read','loonie-vs-mark-grist') }}"><img class="d-block w-100" src="{{ asset('images/carousel/loonie-vs-markgrist.jpg') }}"></a>
                    </div>
                    <div class="carousel-item">
                      <a href="https://www.redbull.tv/film/AP-1TE4PK9292111/mark-grist-battles-the-world" target="_blank"><img class="d-block w-100" src="{{ asset('images/carousel/mg_redbull.jpg') }}"></a>
                    </div>                  
                </div>
                <a class="carousel-control-prev" href="#ftcarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#ftcarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            </div>
@endsection

@section('content')

            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                <h3>Featured Articles:</h3>
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
                      <div class="float-right">
                        <a href="/articles">Check more articles..</a>
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                  <h3>Featured Videos:</h3>
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
                  <div class="float-right">
                        <a href="/videos">Check more videos..</a>
                      </div>
                </div>
            </div>
@endsection
