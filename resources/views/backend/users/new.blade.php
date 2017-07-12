@extends('layouts.dashboard')
@php ( $title='Χρήστης' )
@php ( $description='Προσθήκη')
@section('content')
<div class='row'>

  <div class="container-fluid">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-body">
      <div class="col-md-12">
              {{ Form::open(array('action' => 'UserController@store')) }}
              <div class="row">
                <div class="col-md-12">
                  {{ Form::label('Ονοματεπώνυμο') }}
                  {{ Form::text('name', null,array('class' => 'form-control')) }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  {{ Form::label('Email') }}
                  {{ Form::text('email', null,array('class' => 'form-control')) }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  {{ Form::label('Κωδικός') }}
                  {{ Form::text('password', '',array('class' => 'form-control')) }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  {{ Form::label('Ρόλος') }}
                  {{ Form::select('role',$roles,null ,array('class' => 'form-control', 'placeholder' => 'Επιλέξτε...')) }}
                </div>
              </div>



                <hr>
                {{ Form::submit('Προσθήκη χρήστη',array('class' => 'btn btn-primary')) }}
                <a class="btn btn-danger" href="{{ route('users.index')}}" role="button">Ακύρωση</a>

                <!-- /.box-body -->

                <div class="box-footer">

                </div>
              </form>
  </div>
</div>
    </div>
  </div>
</div><!-- /.row -->

@endsection
