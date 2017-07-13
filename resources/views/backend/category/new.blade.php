@extends('layouts.backend.dashboard')
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
              {{ Form::open(array('action' => 'Admin\CategoryController@store')) }}
              <div class="row">
                <div class="col-md-12">
                  {{ Form::label('Όνομα κατηγορίας') }}
                  {{ Form::text('name', null,array('class' => 'form-control')) }}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  {{ Form::label('Περιγραφή') }}
                  {{ Form::text('description', null,array('class' => 'form-control')) }}
                </div>
              </div>
                <hr>
                {{ Form::submit('Προσθήκη κατηγορίας',array('class' => 'btn btn-primary')) }}
                <a class="btn btn-danger" href="{{ route('backend.category.index')}}" role="button">Ακύρωση</a>

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
