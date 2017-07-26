@extends('layouts.frontend.dashboard')
@section('content')

<!-- shop single-product -->
<section style="padding-top:100px" id="shop">
    <div class="container space-top-30">
        <div class="row">

            <!-- product content area -->
            <div class="col-sm-6 product-content-area">
                <div class="product-content-area">
                    <div id="product-slider" class="carousel slide" data-ride="carousel">
                        <!-- wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="{{asset('images/products/'.$product->product_photo1)}}" alt="">
                            </div>
                            <!--
                            <div class="item">
                                <img src="images/t-product-slide2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="images/t-product-slide3.jpg" alt="">
                            </div>
                          -->
                        </div>
                        <!-- / wrapper for slides -->

                        <!-- controls
                        <a class="left carousel-control" href="#product-slider" role="button" data-slide="prev">
                            <span class="lnr lnr-chevron-left" aria-hidden="true"></span>
                        </a>
                        <a class="right carousel-control" href="#product-slider" role="button" data-slide="next">
                            <span class="lnr lnr-chevron-right" aria-hidden="true"></span>
                        </a>
                        <!-- / controls -->
                    </div><!-- / product-slider -->


                    <!-- / tab-content -->
                </div><!-- / product-content-area -->

            </div>
            <!-- / product-content-area -->

            <!-- product sidebar area -->
            <div class="col-sm-6 product-sidebar">
                <div class="product-sidebar-details">
                    <h4>{{$product->name}}</h4>
                    <br>
                    Περιγραφή προϊόντος:
                    <br><br>
                    <p>{{$product->description}}</p>
                    <br>
                    <div class="product-info">
                        <div class="info">
                            <p><i class="lnr lnr-tag"></i><span>Τιμή: <b>{{$product->price}}€</b></span></p>
                        </div>
                        <div class="info">
                            <p><i class="lnr lnr-heart"></i><span>Κατηγορία: <b><a href="#"> {{$product->getCategory->name}}</a></b></span></p>
                        </div>
                        <div class="info">
                            <p><i class="lnr lnr-menu"></i><span>Κωδικός προϊόντος: <b>{{str_pad($product->id,6,"0",STR_PAD_LEFT)}}</b></span></p>
                        </div>
                    </div><!-- / product-info -->

                    <div class="buy-product">
                        <div class="options">
                            Ποσότητα: <input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                        </div>
                        <!-- / options -->

                        <div class="space-25">&nbsp;</div>

                        <a id="clink" href="{{route('frontend.cart.add',['id'=>$product->id,'qty'=>1] )}}" class="btn btn-primary-filled btn-rounded"><i class="lnr lnr-cart"></i><span> Προσθήκη στο καλάθι</span></a>
                        <a href="checkout.html" class="btn btn-success-filled btn-rounded"><i class="lnr lnr-heart"></i><span> Αγορά τώρα</span></a>
                    </div>
                </div><!-- product-details -->
            </div><!-- / col-sm-4 col-md-3 -->
            <!-- / product sidebar area -->
        </div><!-- / row -->

        <div id="related-products">
            <h4 class="space-top-30 space-bottom-30 space-left">ΣΧΕΤΙΚΑ ΠΡΟΪΟΝΤΑ</h4>
            <ul class="row shop list-unstyled" id="grid">
                @foreach($related as $rel)
                <!-- product -->
                <li class="col-xs-6 col-md-4 product m-product" data-groups='["laptop"]'>
                    <div class="img-bg-color primary">
                        <h5 class="product-price">{{$rel->price}}€</h5>
                        <a href="single-product3.html" class="product-link"></a>
                        <!-- / product-link -->
                        <img src="{{asset('images/products/'.$rel->product_photo1)}}" alt="">
                        <!-- / product-image -->

                        <!-- product-hover-tools -->
                        <div class="product-hover-tools">
                            <a href="{{route('frontend.viewproduct',$rel->id)}}" class="view-btn" data-toggle="tooltip" title="View Product">
                                <i class="lnr lnr-eye"></i>
                            </a>
                            <a href="shopping-cart.html" class="cart-btn" data-toggle="tooltip" title="Add to Cart">
                                <i class="lnr lnr-cart"></i>
                            </a>
                        </div><!-- / product-hover-tools -->

                        <!-- product-details -->
                        <div class="product-details">
                            <h5 class="product-title">{{$rel->name}}</h5>
                            <p class="product-category">{{$rel->getCategory->name}}</p>
                        </div><!-- / product-details -->
                    </div><!-- / img-bg-color -->
                </li>
                <!-- / product -->
                @endforeach
            </ul><!-- / row -->
        </div><!-- / related-products -->

    </div><!-- / container -->
</section>
<!-- / shop single-product -->
@endsection

@section('js')
<script>
$('input[name*="quantity"]').change(function() {
  var target = $("#clink").attr("href");
  var l = target.lastIndexOf('/');
  target = target.substring(0, l);
  $("#clink").attr("href", target + '/'+$(this).val());
});
</script>
@endsection
