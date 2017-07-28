@extends('layouts.backend.dashboard')
@php ( $title='Παραγγελία' )
@php ( $description='Προβολή #'.$item->id)
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
        <div class="">
          <div class="pull-right">
            @if($item->confirmed==0)
            <a class="btn btn-success btn" href="{{route('backend.orders.confirm', $item->id)}}" role="button"><i class="fa fa-check" aria-hidden="true"></i> Αποδοχή παραγγελίας</a>
            <a class="btn btn-danger btn" href="{{route('backend.orders.cancel', $item->id)}}" role="button"><i class="fa fa-ban" aria-hidden="true"></i> Απόρριψη</a>
            @elseif($item->confirmed==1)
            <a class="btn btn-success btn" href="{{route('backend.orders.confirm', $item->id)}}" role="button"><i class="fa fa-check" aria-hidden="true"></i> Συνέχεια αποστολής</a>
            @endif
         </div>
          <h4 style="padding-top:10px">Αναλυτική προβολή παραγγελίας</h4>

        </div>
        <br>
        <div class="row">
        <div class="col-md-6">
            <div class="box1">
              <div class="box-header">
                <h4 class="box-title">Στοιχεία πελάτη</h4>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table class="table table-condensed">
                  <tr>
                    <th></th>
                    <th></th>
                  </tr>
                  <tr>
                    <td>Αριθμός παραγγελίας</td>
                    <td>#{{str_pad($item->id,6,0,STR_PAD_LEFT)}}</td>
                  </tr>
                  <tr>
                    <td>Hμ/νία παραγγελίας</td>
                    <td>{{ \Carbon\Carbon::parse($item->created_at)->timezone('Europe/Athens')->format('d/m/Y H:i') }}</td>
                  </tr>
                  <tr>
                    <td>Ονοματεπώνυμο</td>
                    <td>{{$item->lastname}} {{$item->firstname}}</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>{{$item->email}}</td>
                  </tr>
                  <tr>
                    <td>Τηλέφωνο</td>
                    <td>{{$item->mobiletel}}</td>
                  </tr>
                  <tr>
                    <td>Διεύθυνση</td>
                    <td>{{$item->address}}, {{$item->city}} TK {{$item->zipcode}}</td>
                  </tr>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>

          <div class="col-md-6">
              <div class="box1">
                <div class="box-header">
                  <h4 class="box-title">Προϊόντα παραγγελίας</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-condensed">
                    <tr>
                      <th>#</th>
                      <th>Προϊόν</th>
                      <th>Ποσότητα</th>
                      <th>Τιμή/Τεμάχιο</th>
                    </tr>
                    @foreach($item->getProducts as $prod)
                    <tr>
                      <td>{{$prod->id}}</td>
                      <td>{{$prod->name}}</td>
                      <td>{{$prod->qty}}x</td>
                      <td>{{$prod->price}}€</td>
                    </tr>
                    @endforeach
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            </div>
            <div class="row">

            </div>
        </div>
      </div>




    </div>
  </div>
</div><!-- /.row -->

@endsection
