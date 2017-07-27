@extends('layouts.backend.dashboard')

@php ( $title='Παραγγελίες' )
@php ( $description='Προς Αποστολή')
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
        <div class="table-responsive">
            <table class="table table-condensed table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ΗΜ ΠΑΡΑΓΓΕΛΙΑΣ</th>
                        <th>ΟΝΟΜΑTEΠΩΝΥΜΟ</th>
                        <th>ΠΕΡΙΟΧΗ</th>
                        <th>ΔΙΕΥΘΥΝΣΗ</th>
                        <th>ΤΗΛΕΦΩΝΟ</th>
                        <th>ΕΝΕΡΓΕΙΕΣ</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td><a href="#">{{ $item->created_at }}</a></td>
                        <td><a href="#">{{ $item->lastname }} {{ $item->firstname }}</a></td>
                        <td><a href="#">{{ $item->city }}</a></td>
                        <td><a href="#">{{ $item->address }}</a></td>
                        <td><a href="#">{{ $item->mobiletel }}</a></td>
                        <td width="250px">
                          <a class="btn btn-success btn-xs" href="{{route('backend.orders.confirm', $item->id)}}" role="button">Αποδοχή</a>
                          <a class="btn btn-danger btn-xs" href="{{route('backend.orders.cancel', $item->id)}}" role="button">Απόρριψη</a>
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
