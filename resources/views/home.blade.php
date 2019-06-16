@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>You are logged in.</p>                    
                    {{--
                    <p>Welcome {{ auth()->user()->name }}.</p>
                    <p>Your account is: {{ auth()->user()->verified() ? 'Verified' : 'Not verified' }}</p>
                    --}}
                </div>
            </div>
        </div>
    </div>

@endsection
