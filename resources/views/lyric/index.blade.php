@extends('layouts.app')

@section('content')


{{--
    <div class="row justify-content-md-center">
  		<div class="col">
  			<hr>
  		</div>
  		<div class="col-md-8">
  			<h1 class="mt-4 mb-3">LYRICS</h1>
  		</div>
  		<div class="col">
  			<hr>
  		</div>
  	</div> <!-- end of .row -->
    <br>
--}}
    <div class="row justify-content-md-center">
  		<div class="col-md-8">
			
			<div class="">	  
				<form method="get">
					<h3>Lyrics</h3>
					<div class="input-group mb-1">							
						<input type="text" class="form-control form-control-sm mr-1" placeholder="search" name="search">
						<button class="btn btn-sm btn-danger" type="submit">Search</button>						
					</div>
				</form>
			</div>
  			<div class="list-group">
  					@foreach ($lyrics->sortBy('title') as $lyric)
  							<a href="{{ route('lyric_read', $lyric->slug) }}" class="list-group-item list-group-item-dark list-group-item-action">{{ $lyric->title.' - '.$lyric->artist }}</a>
  					@endforeach
  			</div>
  		</div>
  	</div>

    <div class="row justify-content-md-center">
  		<div class="col-md-8">
  			<div class="list-group">
            <p class="text-center">{{ $lyrics->appends(request()->except('page'))->links() }}</p>
        </div>
    	</div>
    </div>

    {{--
    @foreach($lyrics as $lyric)
        <ul>
          <a href="/lyric/{{ $lyric->slug }}">
            {{ $lyric->title }}
          </a>
        </ul>
        <hr>
    @endforeach
    --}}

@endsection
