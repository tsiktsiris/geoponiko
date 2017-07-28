@extends('layouts.backend.dashboard')
@php ( $title='Παραγγελία' )
@php ( $description='Προβολή στοιχείων')
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
            <a class="btn btn-success btn" href="{{route('backend.orders.finish', $item->id)}}" role="button"><i class="fa fa-check" aria-hidden="true"></i> Συνέχεια αποστολής</a>
            @endif
         </div>
          <h4 style="padding-top:10px">Αναλυτική προβολή παραγγελίας</h4>

        </div>
        <br>
        <div class="row">
          <div class="col-md-7">
              <div class="box1">
                <div class="box-header">
                  <h4 class="box-title">Στοιχεία παραγγελίας</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-condensed">
                    <tr>
                      <th width="150px"></th>
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
                      <td>Σημείωση από πελάτη</td>
                      <td>{{$item->notes}}</td>
                    </tr>
                    <tr>
                      <td>Τρόπος πληρωμής</td>
                      <td>
                      @if($item->payment == 1)
                        Κατάθεση σε τράπεζα
                      @elseif($item->payment ==2)
                        Αντικαταβολή (χρέωση παραλήπτη)
                      @endif
                      </td>
                    </tr>
                    <tr>
                      <td>Σύνολο πληρωμής</td>
                      <td>
                        <?php $total=$item->addcost ?>
                        @foreach($item->getProducts as $prod)
                          <?php $total+=$prod->qty * $prod->price; ?>
                        @endforeach
                        {{$total}} € (EUR)
                      </td>
                    </tr>


                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
        <div class="col-md-5">
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
                  <tr>
                    <td>Παραστατικό</td>
                    <td>
                      @if($item->invoice == NULL)
                      Απόδειξη Λιανικής
                      @else
                      Τιμολόγιο
                      @endif
                    </td>
                  </tr>
                  @if($item->invoice != NULL)
                  <tr>
                    <td>ΑΦΜ</td>
                    <td>
                      {{$item->afm}}
                    </td>
                  </tr>
                  @endif
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                  <div class="box1">
                    <div class="box-header">
                      <h4 class="box-title">Προϊόντα παραγγελίας</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <table class="table table-condensed">
                        <tr>
                          <th width="130px">Κωδικός προϊόντος</th>
                          <th>Όνομα προϊόντος</th>
                          <th>Ποσότητα</th>
                          <th>Τιμή ανα τεμάχιο</th>
                        </tr>
                        @foreach($item->getProducts as $prod)
                        <tr>
                          <td>{{str_pad($prod->id,6,0,STR_PAD_LEFT)}}</td>
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
        </div>
      </div>
    </div>
  </div>
</div><!-- /.row -->

@endsection
