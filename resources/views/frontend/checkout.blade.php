@extends('layouts.frontend.dashboard')
@section('content')

<!-- shopping-cart -->
<div style="padding-top:80px" id="checkout">
    <div class="container">
        <div class="row checkout-screen">
            <div class="col-sm-8 checkout-form">
                <h4 class="space-left">Ολοκλήρωση παραγγελίας</h4>
                <p class="space-left have-account space-bottom">Έχετε ήδη λογαριασμό; <a href="#"><span>Συνδεθείτε</span></a></p>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('frontend.order.store') }}">
                    {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="firstname" placeholder="*ΟΝΟΜΑ" required>
                        <input type="text" class="form-control" name="lastname" placeholder="*ΕΠΩΝΥΜΟ" required>
                        <input type="email" class="form-control" name="email" placeholder="*EMAIL" required>

                    </div>
                    <div class="col-sm-6">
                        <input type="tel" class="form-control" name="mobiletel" placeholder="*ΤΗΛΕΦΩΝΟ" required>
                        <input type="text" class="form-control" name="company" placeholder="ΕΤΑΙΡΕΙΑ">
                        <input type="text" class="form-control" name="address" placeholder="*ΔΙΕΥΘΥΝΣΗ" required>
                    </div>
                </div><!-- / row -->

                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="city" placeholder="ΠΟΛΗ" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="zipcode" placeholder="ΤΑΧΥΔΡΟΜΙΚΟΣ ΚΩΔΙΚΑΣ" required>
                    </div>
                </div><!-- / row -->

                <div class="checkout-form-footer space-left space-right">
                    <textarea class="form-control" name="notes" placeholder="ΜΗΝΥΜΑ"></textarea>
                    <button type="submit" class="btn btn-primary-filled btn-rounded">
                        Ολοκλήρωση παραγγελίας
                    </button>

                </div><!-- / checkout-form-footer -->

            </div><!-- / checkout-form -->

            <div class="col-sm-4 checkout-total">
                <h4>Σύνολο παραγγελίας: <span>{{$cart->getTotal()}} €</span></h4>
                <p>*Η τιμή περιλαμβάνει μεταφορικά και ΦΠΑ</p>
                <div class="cart-total-footer">
                    <a href="{{route('frontend.cart')}}" class="btn btn-default-filled btn-rounded"><i class="lnr lnr-arrow-left"></i><span>Πίσω στο καλάθι</span></a>

                </div><!-- / cart-total-footer -->

                <hr>
                <h5 style="padding-top:20px"> Επιλέξτε τρόπο πληρωμής </h5>
                <input type="radio" name="payment" value="katathesi"> Κατάθεση σε λογαριασμό<br>
                <input type="radio" name="payment" value="antikatavoli"> Με αντικαταβολή<br>

                <br><br>
                * Με αντικαταβολή υπάρχει επιβάρυνση 3.5€ στο γενικό σύνολο


            </div><!-- / checkout-total -->

        </div><!-- / row -->
    </div><!-- / container -->
</div>
<!-- / shopping-cart -->


@endsection
