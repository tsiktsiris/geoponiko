@extends('layouts.dashboard')
@php ( $title='Χρήστες' )
@php ( $description='Διαχείριση Χρηστών Πύλης')
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
            <a class="btn btn-primary pull-left" href="{{route('users.new')}}" role="button">Προσθήκη εγγραφής</a>


        </div>
        <div class="table-responsive">
            <table class="table table-condensed table-striped table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>ΟΝΟΜΑ</th>
                        <th>EMAIL</th>
                        <th>ΙΔΙΟΤΗΤΑ</th>
                        <th>ΠΕΡΙΓΡΑΦΗ</th>
                        <th>ΕΝΕΡΓΕΙΕΣ</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td>{{str_pad($user->id, 5, "0", STR_PAD_LEFT)}}</td>
                        <td><a href="#">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>
                        {{  $user->getRole()->name}}
                        </td>
                        <td>
                        {{  $user->getRole()->description}}
                        </td>
                        <td width="250px">
                          <a class="btn btn-primary btn-xs" href="{{route('users.edit', $user->id )}}" role="button">Τροποποίηση</a>
                          <a class="btn btn-danger btn-xs" href="{{route('users.delete', $user->id )}}" role="button">Διαγραφή</a>

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
