@extends('layouts.frontend.dashboard')
@section('content')
<!-- shopping-cart -->
<div style="padding-top:80px" id="shopping-cart">
    <div class="container">
        <!-- shopping cart table -->
        <table class="shopping-cart">
            <thead>
                <tr>
                    <th class="image">&nbsp;</th>
                    <th>ΠΡΟΪΟΝ</th>
                    <th>ΤΙΜΗ</th>
                    <th>ΠΟΣΟΤΗΤΑ</th>
                    <th>ΣΥΝΟΛΟ</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>

              @forelse($items as $item)
                <tr class="cart-item">
                    <td></td>
                    <td><a href="{{route('frontend.viewproduct',$item->id)}}">{{$item->name}}</a></td>
                    <td>{{$item->price}}€</td>
                    <td class="qty"><input type="number" step="1" min="0" name="cart" value="1" title="Qty" class="input-text qty text" size="4"></td>
                    <td>{{$item->price}}€</td>
                    <td class="remove"><a href="{{route('frontend.cart.remove',$item->id)}}" class="btn btn-danger-filled x-remove">×</a></td>
                </tr>
                @empty
                <tr><td><td colspan="5">Δεν έχετε προϊόντα στο καλάθι σας</td></tr>
                @endforelse
            </tbody>
        </table>
        <!-- / shopping cart table -->

        <div class="row cart-footer">
            <div class="coupon col-sm-6">
                <div class="input-group">
                    <input type="text" class="form-control rounded" id="coupon-code" placeholder="ΚΩΔΙΚΟΣ ΚΟΥΠΟΝΙΟΥ">
                    <span class="input-group-btn">
                    <button class="btn btn-primary-filled btn-rounded" type="button"><i class="lnr lnr-tag"></i> <span>Χρήση</span></button>
                    </span>
                </div>
            </div><!-- / input-group -->
            <div class="update-cart col-sm-6">
                <button class="btn btn-default-filled btn-rounded" type="button"><i class="lnr lnr-sync"></i> <span>Ανανέωση καλαθιού</span></button>
            </div><!-- / update-cart -->

            <div class="col-sm-6 cart-total">
                <h4>ΣΥΝΟΛΟ</h4>
                <p>Subtotal: <span>$147</span></p>
                <p>Shipping: <span>Free</span></p>
                <p>Total: <span>$147</span></p>
            </div><!-- / cart-total -->

            <div class="col-sm-6 cart-checkout">
                <!--<a href="shop-right.html" class="btn btn-default-filled btn-rounded"><i class="lnr lnr-cart"></i> <span>Συνέχιση αγοράς</span></a>-->
                <a href="checkout.html" class="btn btn-primary-filled btn-rounded"><i class="lnr lnr-exit"></i> <span>Συνέχεια αγοράς</span></a>
            </div><!-- / cart-checkout -->


        </div><!-- / row -->
    </div><!-- / container -->
</div>
<!-- / shopping-cart -->

@endsection
