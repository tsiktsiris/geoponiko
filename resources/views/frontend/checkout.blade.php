@extends('layouts.frontend.dashboard')
@section('content')

<!-- shopping-cart -->
<div style="padding-top:80px" id="checkout">
    <div class="container">
        <div class="row checkout-screen">
            <div class="col-sm-8 checkout-form">
                <h4 class="space-left">Ολοκλήρωση παραγγελίας</h4>
                <p class="space-left have-account space-bottom">Έχετε ήδη λογαριασμό; <a href="login-register.html"><span>Συνδεθείτε</span></a></p>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="first-name" placeholder="*ΟΝΟΜΑ" required>
                        <input type="text" class="form-control" name="last-name" placeholder="*ΕΠΩΝΥΜΟ" required>
                        <input type="email" class="form-control" name="email" placeholder="*EMAIL" required>

                    </div>
                    <div class="col-sm-6">
                        <input type="tel" class="form-control" name="tel" placeholder="*ΤΗΛΕΦΩΝΟ" required>
                        <input type="text" class="form-control" name="company" placeholder="ΕΤΑΙΡΕΙΑ">
                        <input type="text" class="form-control" name="address-line" placeholder="*ΔΙΕΥΘΥΝΣΗ" required>
                    </div>
                </div><!-- / row -->

                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="zip" placeholder="ΠΟΛΗ" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="zip" placeholder="ΤΑΧΥΔΡΟΜΙΚΟΣ ΚΩΔΙΚΑΣ" required>
                    </div>
                </div><!-- / row -->

                <div class="checkout-form-footer space-left space-right">
                    <textarea class="form-control" name="message" placeholder="ΜΗΝΥΜΑ" required></textarea>
                    <a href="" class="btn btn-primary-filled btn-rounded"><i class="lnr lnr-cart"></i><span>Ολοκλήρωση παραγγελίας</span></a>
                </div><!-- / checkout-form-footer -->

            </div><!-- / checkout-form -->

            <div class="col-sm-4 checkout-total">
                <h4>Σύνολο παραγγελίας: <span>{{$cart->getTotal()}} €</span></h4>
                <p>*Η τιμή περιλαμβάνει μεταφορικά και ΦΠΑ</p>
                <div class="cart-total-footer">
                    <a href="shopping-cart.html" class="btn btn-default-filled btn-rounded"><i class="lnr lnr-arrow-left"></i><span>Πίσω στο καλάθι</span></a>
                    <a href="shop-right.html" class="btn btn-primary-filled btn-rounded"><i class="lnr lnr-store"></i><span>Πίσω στα προϊόντα</span></a>
                </div><!-- / cart-total-footer -->
            </div><!-- / checkout-total -->

        </div><!-- / row -->
    </div><!-- / container -->
</div>
<!-- / shopping-cart -->


@endsection
