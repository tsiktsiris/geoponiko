@extends('layouts.frontend.dashboard')
@section('content')
<!-- header-banner -->
<div id="header-banner" class="demo-1">
    <div class="banner-content text-center">
      <!--
        <div class="banner-border">
            <div class="banner-info">
                <h1></h1>
                <p>Minimal Fashion Shop</p>
            </div> / banner-info
        </div> banner-border -->
    </div><!-- / banner-content -->
</div>
<!-- / header-banner -->
<!-- Use a button to open the snackbar -->


<!-- collections -->
<section id="collections">
    <div class="container">
        <h2 class="hide">COLLECTIONS</h2>
        <div class="row">
            <div class="col-sm-6 collection">
                <a href="#">
                  <div class="img-overlay">
                    <img src="./images/fytofarmaka.jpg" alt="">
                      <div class="project-overlay"><center>ΦΥΤΟΦΑΡΜΑΚΑ</center></div>
                    </div>
                </a>
            </div>
            <!-- / collection -->
            <div class="col-sm-6 collections">
                <div class="row">
                    <div class="col-sm-12 collection">
                        <a href="#">
                          <div class="img-overlay">
                            <img src="./images/fyta.jpg" alt="">
                            <div class="project-overlay"><center>ΣΠΟΡΟΙ - ΦΥΤΑ</center></div>
                            </div>
                        </a>
                    </div><!-- / collection -->
                    <div class="col-sm-6 collection">
                        <a href="#">
                          <div class="img-overlay">
                            <img src="./images/ydreush.jpg" alt="">
                            <div class="project-overlay"><center><small><small>ΣΥΣΤΗΜΑΤΑ ΥΔΡΕΥΣΗΣ</small></small></center></div>
                          </div>
                        </a>
                    </div><!-- / collection -->
                    <div class="col-sm-6 collection">
                        <a href="#">
                          <div class="img-overlay">
                            <img src="./images/ergaleia.jpg" alt="">
                            <div class="project-overlay"><center><small><small>ΕΡΓΑΛΕΙΑ ΚΗΠΟΥ</small></small></center></div>
                          </div>
                        </a>
                    </div><!-- / collection -->
                </div><!-- / row -->
            </div>
            <!-- / collections -->
        </div><!-- / row -->
    </div><!-- / container -->
</section>
<!-- / collections -->

<!-- features section 3col -->
<section id="features">
    <div class="container">
        <div class="row">
            <!-- feature-block -->
            <div class="col-md-4 feature-center bg-light">
                <div class="feature block">
                    <div class="feature-icon">
                        <i class="lnr lnr-gift"></i>
                    </div>
                    <h5>ΔΩΡΕΑΝ ΜΕΤΑΦΟΡΙΚΑ</h5>
                    <p>Δωρεάν μεταφορικά για παραγγελίες άνω των 50€</p>
                </div>
            </div><!-- / col-md-4 -->
            <!-- / feature-block -->

            <!-- feature-block -->
            <div class="col-md-4 feature-center bg-dark">
                <div class="feature block">
                    <div class="feature-icon">
                        <i class="lnr lnr-clock"></i>
                    </div>
                    <h5>ΓΡΗΓΟΡΗ ΑΠΟΣΤΟΛΗ</h5>
                    <p>Γρήγορη πανελλαδική αποστολή όπου και αν βρίσκεστε</p>
                </div>
            </div><!-- / col-md-4 -->
            <!-- / feature-block -->

            <!-- feature-block -->
            <div class="col-md-4 feature-center bg-light">
                <div class="feature block">
                    <div class="feature-icon">
                        <i class="lnr lnr-exit"></i>
                    </div>
                    <h5>ΕΓΓΥΗΣΗ ΧΡΗΜΑΤΩΝ</h5>
                    <p>Εγγύηση επιστροφής χρημάτων μέσα σε διάστημα 30 ημερών</p>
                </div>
            </div><!-- / col-md-4 -->
            <!-- / feature-block -->
        </div><!-- / row -->
    </div><!-- / container -->
</section>
<!-- / features section 3col -->
<br>
<!-- shop section -->
<section id="shop">
    <div class="container">
        <div class="page-header no-margin-top text-center">
            <h3>ΝΕΑ ΠΡΟΪΟΝΤΑ</h3>
        </div><!--/ page-header -->
        <ul class="row shop list-unstyled" id="grid">


            @foreach($products as $product)
            <!-- product -->
            <li class="col-xs-4 product m-product" data-groups='["bedroom"]'>

                <div class="img-bg-color primary">
                    <h5 class="product-price">{{$product->price}}€</h5>
                    <a href="single-product2.html" class="product-link"></a>
                    <!-- / product-link -->
                    <a href="{{route('frontend.viewproduct',$product->id)}}">
                    <img src="{{asset('/images/products/'.$product->product_photo1)}}" alt="">
                    <!-- / product-image -->

                    <!-- product-hover-tools
                    <div class="product-hover-tools">
                        <a href="{{route('frontend.viewproduct',$product->id)}}" class="view-btn" data-toggle="tooltip" title="Προβολή">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="{{route('frontend.cart.add',['id'=>$product->id,'qty'=>1] )}}" class="cart-btn" data-toggle="tooltip" title="Προσθήκη στο καλάθι">
                            <i class="lnr lnr-cart"></i>
                        </a>
                    </div> / product-hover-tools -->

                    <!-- product-details -->
                    <div class="product-details">
                        <h5 class="product-title">{{$product->name}}</h5>
                        <p class="product-category">{{$product->getCategory->name}}</p>
                    </div><!-- / product-details -->
                    </a>
                </div><!-- / img-bg-color -->

            </li>
            <!-- / product -->
            @endforeach


            <!-- sizer -->
            <li class="col-xs-6 col-md-4 shuffle_sizer"></li>
            <!-- / sizer -->

        </ul> <!-- / products -->
    </div><!-- / container -->

</section>
<!-- / shop section -->


<!-- brands carousel -->
<section id="brands" class="dark primary-background">
    <h2 class="hidden">&nbsp;</h2>
    <div class="container">
        <div id="brands-carousel" class="owl-carousel">
            <div class="item"><img src="./images/bottom/10.jpg" alt=""></div>
            <div class="item"><img src="./images/bottom/2.jpg" alt=""></div>
            <div class="item"><img src="./images/bottom/3.jpg" alt=""></div>
            <div class="item"><img src="./images/bottom/4.jpg" alt=""></div>
            <div class="item"><img src="./images/bottom/5.jpg" alt=""></div>
            <div class="item"><img src="./images/bottom/6.jpg" alt=""></div>
            <div class="item"><img src="./images/bottom/7.jpg" alt=""></div>
            <div class="item"><img src="./images/bottom/8.jpg" alt=""></div>
            <div class="item"><img src="./images/bottom/9.jpg" alt=""></div>
            <div class="item"><img src="./images/bottom/1.jpg" alt=""></div>
        </div>
    </div><!-- / container -->
</section>
<!-- / brands carousel -->
@endsection
