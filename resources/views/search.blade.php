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
			@if(!empty($posts))
				@foreach($posts as $individual_post)
					@if($individual_post->status == 'PUBLISHED')
						<a href="{{ route('article_read', $individual_post->slug) }}">                        
							<p class="card-title">{{ $individual_post->title }}</p>
						</a>                    
					@endif
				@endforeach
			@endif
			</div>
		</div>
		<hr>           
	
	<h4>Videos:</h4>
	<div class="col-10">
		<div class="group-list">
			@if(!empty($videos))
				@foreach($videos as $video)		
						<a href="{{ route('video_read', $video->slug) }}">                        
							<p class="card-title">{{ $video->title }}</p>
						</a>
				@endforeach
			@endif
		</div>
	</div>
	<hr>

	<h4>Lyrics:</h4>
	<div class="col-10">
		<div class="group-list">
		@if(!empty($lyrics))
			@foreach($lyrics as $lyric)		
					<a href="{{ route('lyric_read', $lyric->slug) }}">                        
						<p class="card-title">{{ $lyric->title }}</p>
					</a>
			@endforeach
		@endif
		</div>
	</div>
  </div>

@endsection
