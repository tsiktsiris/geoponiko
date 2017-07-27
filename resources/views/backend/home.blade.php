@extends('layouts.backend.dashboard')
@php ( $title='www.agro2all.gr' )
@php ( $description='Περιοχή Διαχείρισης')


@section('content')

<div class='row'>

  <div class='col-md-12'>
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach

      <div style="z-index:0" id="map"></div>



  <!-- Button UploadImage

					<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">Add news</button>

				<!-- <img width=400 height =500 style="position: fixed;right: 0px;bottom: 150px;" src="img/tree2.png"></img> Button UploadImage
        <img class="sun" width=200 height =200 style="position: fixed;left: 200px;bottom:250px;opacity: 0.25" src="img/sun3.png"></img>

        <img width='100%' height =400 style="position: fixed;left: 0px;bottom: 0px;" src="img/grass2.png"></img>
-->


  </div>
</div>
@endsection
