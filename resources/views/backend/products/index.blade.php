@extends('layouts.backend.dashboard')
@php ( $title='Προϊόντα' )
@php ( $description='Λίστα προϊόντων')
@section('content')
<div class='row'>

  <div class="container-fluid">
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))

          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
          @endif
        @endforeach
      </div> <!-- end .flash-message -->
    <div class="panel panel-default">

        <div class="panel-body">
            <a class="btn btn-primary pull-left" href="{{route('backend.products.new')}}" role="button">Προσθήκη εγγραφής</a>


        </div>
        <div class="table-responsive">
            <table class="table table-condensed table-striped table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>ΟΝΟΜΑ</th>
                        <th>ΠΕΡΙΓΡΑΦΗ</th>
                        <th class="text-center">ΕΝΕΡΓΕΙΕΣ</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{mb_strimwidth($item->description, 0, 100, "...")}}</td>
                        <td width="150px">
                          <a class="btn btn-primary btn-xs" href="{{route('backend.products.edit',$item->id)}}" role="button">Τροποποίηση</a>
                          <a class="btn btn-danger btn-xs" href="{{route('backend.products.delete',$item->id)}}" role="button">Διαγραφή</a>

                        </td>
                    </tr>
                    @empty
                        <tr>
                          <td colspan="7">
                          Δεν υπάρχουν εγγραφές
                        </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

        </div>

    </div>

  </div>
</div><!-- /.row -->
@endsection
