@extends('layouts.frontend.dashboard')
@section('content')
<!-- shopping-cart -->
<script src="{{asset('js/jquery.min.js')}}"></script>
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
                    <td id="PS{{$item->id}}">{{$item->price}}</td>
                    <td id="QTY{{$item->id}}" class="qty"><input style="max-width:80px" type="number" step="1" min="1" name="quantity{{$item->id}}" value="{{$item->quantity}}" title="Qty" class="input-text qty text" size="4"></td>
                    <td class="ctotal" id="PT{{$item->id}}">{{number_format($item->price * $item->quantity,2)}}</td>
                    <td class="remove"><a href="{{route('frontend.cart.remove',$item->id)}}" class="btn btn-danger-filled x-remove">×</a></td>
                </tr>

                <script>
                $('input[name*="quantity{{$item->id}}"]').change(function() {
                  $.get("cart/update/{{$item->id}}/"+$(this).val());
                  var num = parseFloat($("#PS{{$item->id}}").html()) * $(this).val();

                  $("#PT{{$item->id}}").html(num.toFixed(2));
                });
                </script>

                </script>
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
            @if($items->count()>0)

                <h4>ΣΥΝΟΛΟ</h4>
                <p>Προϊόντα: <span class="subtotal">0</span></p>
                <p>Μεταφορικά: <span class="shipping">Δωρεάν</span></p>
                <p>Σύνολο: <span class="total" >0</span></p>


            @endif
            </div><!-- / cart-total -->


            <div class="col-sm-6 cart-checkout">
              @if($items->count()>0)
                <!--<a href="shop-right.html" class="btn btn-default-filled btn-rounded"><i class="lnr lnr-cart"></i> <span>Συνέχιση αγοράς</span></a>-->
                <a href="checkout.html" class="btn btn-primary-filled btn-rounded"><i class="lnr lnr-exit"></i> <span>Συνέχεια αγοράς</span></a>
                  @endif
            </div><!-- / cart-checkout -->
            @if($items->count()==0)
            <div style="padding-top:300px"></div>
            @endif
        </div><!-- / row -->
    </div><!-- / container -->
</div>
<!-- / shopping-cart -->

@endsection

@section('js')
<script>
var total = 0;
$('.shopping-cart').each(function()
{

  $(this).find('.ctotal').each(function () {
    total+=parseFloat($(this).text());
  });
  //alert(total);
});

$('.subtotal').html(total.toFixed(2)+" €");
$('.total').html(total.toFixed(2)+" €");

$('input[name*="quantity"]').change(function() {
  var total = 0;
  $('.shopping-cart').each(function()
  {

    $(this).find('.ctotal').each(function () {
      total+=parseFloat($(this).text());
    });
    //alert(total);
  });

  $('.subtotal').html(total.toFixed(2)+" €");
  $('.total').html(total.toFixed(2)+" €");
})
</script>



@endsection
