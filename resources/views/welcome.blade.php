@extends('layouts.app')

@section('metatags')
    <meta property="og:url"                content="https://www.fliptop.com.ph" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="FlipTop Battle League" />
    <meta property="og:image"              content="{{ asset('images/carousel/isabuhay2018_bracket_round2.jpg') }}" />
@endsection

@section('highlight')
  <div id="app">
            <carousel></carousel>
  </div>
@endsection

@section('content')
    <div id="app">
        <postvid></postvid>
    </div>

@endsection
