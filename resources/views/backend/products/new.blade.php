@extends('layouts.backend.dashboard')
@php ( $title='Προϊόντα' )
@php ( $description='Νέο προϊόν')
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
              {{ Form::open(array('action' => 'Admin\ProductController@store','files' => true)) }}
              <div class="row">
                <div class="col-md-12">
                  {{ Form::label('Τύπος') }}
                  {{ Form::select('subcategory', $subcategories,null,array('class' => 'form-control', 'placeholder' => 'Επιλέξτε...')) }}
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  {{ Form::label('Όνομα') }}
                  {{ Form::text('name', null,array('class' => 'form-control')) }}
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                  {{ Form::label('Περιγραφή') }}
                  {{ Form::textarea('description', null,array('class' => 'form-control')) }}
                </div>
              </div>
              <br>
              {{ Form::label('Φωτογραφία') }}
              {{ Form::file('product_photo1') }}
              <br>
              <div class="row">
                <div class="col-md-2">
                  {{ Form::label('Τιμή (σε Ευρώ)') }}
                  {{ Form::number('price', null, array('class' => 'form-control','step'=>'0.01', 'pattern'=>"[0-9]+([\.,][0-9]+)?")) }}
                </div>
              </div>
                <hr>
                {{ Form::submit('Προσθήκη εγγραφής',array('class' => 'btn btn-primary')) }}
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
