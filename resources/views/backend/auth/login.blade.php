@extends('layouts.backend.app')

@section('content')
<div class="container">
  <center><img src="" /></center>
  <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <center><!--<img width='80%' src="http://localhost/geoponiko/public/images/logo-lg.png"></img>-->
            <br><br>
            <h1>www.agro4all.gr</h1></center><br><br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('backend.login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label"></label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Email χρήστη" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-3 control-label"></label>

                            <div class="col-md-6">
                                <input placeholder="Κωδικός" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="checkbox pull-left">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Αυτόματη είσοδος
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">
                                    Σύνδεση
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
