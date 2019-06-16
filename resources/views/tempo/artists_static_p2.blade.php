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

<h1 class="mt-4 mb-3">Artist Profiles</h1>
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
{{--Profile Row 03--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc07" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_BATAS.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc08" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_BLKD.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc09" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_CRAZYMIX.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 03 --}}
<div class="modal fade mc07" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_BATAS.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc08" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_BLKD.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc09" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_CRAZYMIX.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 04--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc10" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_DELLO.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc11" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_EJPOWER.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc12" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_ELBIZ.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 04 --}}
<div class="modal fade mc10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_DELLO.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_EJPOWER.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_ELBIZ.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 05--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc13" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_FLICTG.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc14" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_FROOZ.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc15" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_FUKUDA.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 05 --}}
<div class="modal fade mc13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_FLICTG.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc14" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_FROOZ.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc15" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_FUKUDA.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 06--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc16" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_GCLOWN.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc17" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_INVICTUS.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc18" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_J-KING.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 06 --}}
<div class="modal fade mc16" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_GCLOWN.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc17" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_INVICTUS.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc18" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_J-KING.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 07--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc19" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_JONAS.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc20" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_KREGGA.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc21" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_LANZETA.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 07 --}}
<div class="modal fade mc19" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_JONAS.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc20" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_KREGGA.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc21" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_LANZETA.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 08--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc22" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_LILJOHN.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc23" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_LILSISA.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc24" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_LOONIE.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 08 --}}
<div class="modal fade mc22" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_LILJOHN.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc23" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_LILSISA.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc24" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_LOONIE.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 09--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc25" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_MARSHALL.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc26" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_MHOT.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc27" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_MZHAYT.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 09 --}}
<div class="modal fade mc25" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_MARSHALL.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc26" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_MHOT.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc27" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_MZHAYT.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 10--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc28" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_NIKKI.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc29" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_PISTOLERO.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc30" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_PLAZMA.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 10 --}}
<div class="modal fade mc28" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_NIKKI.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc29" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_PISTOLERO.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc30" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_PLAZMA.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 11--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc31" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_POISON13.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc32" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_PRICETAGG.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc33" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_RAPIDO.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 11 --}}
<div class="modal fade mc31" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_POISON13.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc32" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_PRICETAGG.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc33" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_RAPIDO.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 12--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc34" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_RIGHTEOUS1.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc35" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_ROMANO.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc36" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_SAKMAESTRO.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 12 --}}
<div class="modal fade mc34" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_RIGHTEOUS1.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc35" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_ROMANO.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc36" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_SAKMAESTRO.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 13--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc37" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_SAYADD.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc38" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_SHEHYEE.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc39" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_SHERNAN.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 13 --}}
<div class="modal fade mc37" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_SAYADD.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc38" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_SHEHYEE.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc39" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_SHERNAN.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 14--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc40" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_SINIO.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc41" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_SMUGGLAZ.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc42" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_SPADE.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 14 --}}
<div class="modal fade mc40" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_SINIO.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc41" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_SMUGGLAZ.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc42" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_SPADE.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 15--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc43" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_SURHENYO.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc44" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_TATZMAVEN.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc45" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_THIKE.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 15 --}}
<div class="modal fade mc43" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_SURHENYO.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc44" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_TATZMAVEN.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc45" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_THIKE.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}
{{--Profile Row 16--}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc46" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_TIPSYD.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc47" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_TWENG.jpg') }}">
            </a>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card h-100 text-center bg-dark">
            <a data-target=".mc48" data-toggle="modal">
              <img class="card-img-top" src="{{ asset('images/artist_profile/profile_ZAITO.jpg') }}">
            </a>
        </div>
    </div>
</div>{{-- /.row --}}
{{-- Large modal 16 --}}
<div class="modal fade mc46" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_TIPSYD.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc47" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_TWENG.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>
<div class="modal fade mc48" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-dark">
            <img src="{{ asset('images/artist_profile/profile_ZAITO.jpg') }}" class="img-fluid" alt="Responsive image"></a>
        </div>
    </div>
</div>{{-- end modal --}}


@endsection
