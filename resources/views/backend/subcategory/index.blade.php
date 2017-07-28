@extends('layouts.backend.dashboard')
@php ( $title='Υποκατηγορίες' )
@php ( $description='Υποκατηγορίες προϊόντων')
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
            <a class="btn btn-primary pull-left" href="{{route('backend.subcategory.new')}}" role="button">Προσθήκη εγγραφής</a>


        </div>
        <div class="table-responsive">
            <table class="table table-condensed table-striped table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>ΟΝΟΜΑ</th>
                        <th>ΠΕΡΙΓΡΑΦΗ</th>
                        <th>ΚΑΤΗΓΟΡΙΑ</th>
                        <th class="text-center">ΕΝΕΡΓΕΙΕΣ</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $categories[$item->category_id] }}</td>
                        <td width="150px">
                          <a class="btn btn-primary btn-xs" href="{{route('backend.subcategory.edit',$item->id)}}" role="button">Τροποποίηση</a>
                          <a class="btn btn-danger btn-xs" href="#" role="button">Διαγραφή</a>

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
