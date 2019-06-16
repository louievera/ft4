@extends('layouts.app')

@section('styling')
<style>h6, .h6 { white-space: pre-wrap; }</style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-6">
            @if($lyric->image <> '')
                <img class="img-fluid" src="{{ asset( '/storage/'.($lyric->image) ) }}" width="100%">
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-6">
            <h1><strong>{{ $lyric->title }}</strong></h1>
            <h5>
                @if($lyric->artist <> '')
                    <p><strong>Artist: {{ $lyric->artist }}</strong></p>
                @endif
                @if($lyric->album <> '')
                    <p><strong>Album: {{ $lyric->album }}</strong></p>
                @endif
                @if($lyric->producedby <> '')
                    <p><strong>Produced by: {{ $lyric->producedby }}</strong></p>
                @endif
            </h5>
            <hr>
            {!! $lyric->body !!}
            
            {{-- Page wrapping for text-box
            <div id="page-wrap">
                <h6>{{ $lyric->body }}</h6>
            </div>
            --}}
        </div>
    </div>
@endsection
