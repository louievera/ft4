@extends('layouts.app')

@section('content')
<div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-10">
      <h3>Search Result:</h3>
	  <hr>
		<h4>Articles:</h4>
		<div class="group-list">
			<div class="col-10">
				@foreach($posts as $individual_post)
					@if($individual_post->status == 'PUBLISHED')
						<a href="{{ route('article_read', $individual_post->slug) }}">                        
							<p class="card-title">{{ $individual_post->title }}</p>
						</a>                    
					@endif
				@endforeach
			</div>
		</div>
		<hr>           
	
	<h4>Videos:</h4>
	<div class="col-10">
		<div class="group-list">
			@foreach($videos as $video)		
					<a href="{{ route('video_read', $video->slug) }}">                        
						<p class="card-title">{{ $video->title }}</p>
					</a>
			@endforeach
		</div>
	</div>
	<hr>

	<h4>Lyrics:</h4>
	<div class="col-10">
		<div class="group-list">
			@foreach($lyrics as $lyric)		
					<a href="{{ route('lyric_read', $lyric->slug) }}">                        
						<p class="card-title">{{ $lyric->title }}</p>
					</a>
			@endforeach
		</div>
	</div>
  </div>


@endsection
