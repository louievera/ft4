@extends('layouts.app')

@section('styling')
<style>
    .card-title, .card-text {
      background-color: black;
      display: inline;
      padding: 0.5rem;

      -webkit-box-decoration-break: clone;
      box-decoration-break: clone;
    }
</style>

@endsection

@section('content')

    @foreach($posts->sortByDesc('created_at') as $post)
      <div class="row">

        <div class="card bg-inverse">
            <img class="card-img" src="{{ asset( '/storage/'.($post->image) ) }}" alt="Card image cap">
            <div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
                <h5 class="card-title">{{ $post->title }}</h5>
                @if($post->author_id <> 0 )
                    <p class="card-text">Posted by {{ $post->author->name }} on {{ $post->created_at->format('F d, Y') }}</p>
                @endif
            </div>
        </div>

      </div>
      <hr>
    @endforeach

@endsection
