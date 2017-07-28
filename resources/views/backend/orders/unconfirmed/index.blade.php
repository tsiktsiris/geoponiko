@extends('layouts.backend.dashboard')

@php ( $title='Παραγγελίες' )
@php ( $description='Προς Επιβεβαίωση')
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
                        <th class="text-center">ΕΝΕΡΓΕΙΕΣ</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->timezone('Europe/Athens')->format('d/m/Y H:i') }}</td>
                        <td>{{ $item->lastname }} {{ $item->firstname }}</td>
                        <td>{{ $item->city }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->mobiletel }}</td>
                        <td width="100px">
                          <a class="btn btn-primary btn-block btn-xs" href="{{route('backend.orders.unconfirmed.view', $item->id)}}" role="button">Προβολή</a>
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
