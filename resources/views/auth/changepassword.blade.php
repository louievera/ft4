@extends('layouts.app')

@section('content')

  <div class="row justify-content-center">
      <div class="col-md-6">
          @if (session('error'))
              <div class="alert alert-danger">
                  {{ session('error') }}
              </div>
          @endif
          {{--
          @if (session('success'))
              <div class="alert alert-success">
                  NOTE2: {{ session('success') }}
              </div>
          @endif
          --}}
      </div>
  </div>


  <div class="row justify-content-center">
      <div class="col-md-6">
          <div class="card text-white bg-dark mb-3">
              <div class="card-header">{{ __('Change Password') }}</div>

              <div class="card-body">
                    <form method="POST" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}

                        <div class="form-group row justify-content-center">
                            <label for="current-password" class="col-md-4 col-form-label text-md-right">Current Password</label>
                            <div class="col-md-4">
                                <input id="current-password" type="password" class="form-control{{ $errors->has('current-password') ? ' has-error' : '' }}" name="current-password" required>
                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="new-password" class="col-md-4 col-form-label text-md-right">New Password</label>
                            <div class="col-md-4">
                                <input id="new-password" type="password" class="form-control{{ $errors->has('new-password') ? ' has-error' : '' }}" name="new-password" required>
                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="new-password-confirm" class="col-md-4 col-form-label text-md-right">Confirm New Password</label>
                            <div class="col-md-4">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-12">
                              <p class="text-center">
                                <button type="submit" class="btn btn-warning">Change Password</button>
                              </p>
                            </div>
                        </div>

                    </form>
              </div>

          </div>
      </div>
  </div>

@endsection
