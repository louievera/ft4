@extends('layouts.app')

@section('stylesheets')
<style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            padding-top: 50px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }
        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            height: 100%;
            max-width: 1422px;
        }
        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }

</style>
@endsection

@section('content')

{{--Profile Row 01--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc01" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_ABRA.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc02" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_APEKZ.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc03" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_APOC.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 01 --}}
<div class="modal fade mc01" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_ABRA.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc02" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_APEKZ.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc03" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_APOC.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 02--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc04" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_ASSER.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc05" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_BASSILYO.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc06" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_BATANGREBELDE.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 02 --}}
<div class="modal fade mc04" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_ASSER.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc05" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_BASSILYO.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc06" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_BATANGREBELDE.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}


@endsection
