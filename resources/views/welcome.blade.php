@extends('layouts.frontend.dashboard')
@section('content')
<!-- collections -->
<section id="collections">
    <div class="container">
        <h2 class="hide">COLLECTIONS</h2>
        <div class="row">
            <div class="col-sm-6 collection">
                <a href="#">
                    <img src="http://placehold.it/1200x1000" alt="">
                </a>
            </div>
            <!-- / collection -->
            <div class="col-sm-6 collections">
                <div class="row">
                    <div class="col-sm-12 collection">
                        <a href="#">
                            <img src="http://placehold.it/1200x500" alt="">
                        </a>
                    </div><!-- / collection -->
                    <div class="col-sm-6 collection">
                        <a href="#">
                            <img src="http://placehold.it/1200x920" alt="">
                        </a>
                    </div><!-- / collection -->
                    <div class="col-sm-6 collection">
                        <a href="#">
                            <img src="http://placehold.it/1200x920" alt="">
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
                    <h5>FREE SHIPPING</h5>
                    <p>Free worldwide shipping</p>
                </div>
            </div><!-- / col-md-4 -->
            <!-- / feature-block -->

            <!-- feature-block -->
            <div class="col-md-4 feature-center bg-dark">
                <div class="feature block">
                    <div class="feature-icon">
                        <i class="lnr lnr-clock"></i>
                    </div>
                    <h5>FAST DELIVERY</h5>
                    <p>Fast worldwide delivery</p>
                </div>
            </div><!-- / col-md-4 -->
            <!-- / feature-block -->

            <!-- feature-block -->
            <div class="col-md-4 feature-center bg-light">
                <div class="feature block">
                    <div class="feature-icon">
                        <i class="lnr lnr-exit"></i>
                    </div>
                    <h5>MONEY BACK</h5>
                    <p>30 Days money back</p>
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
            <!-- product -->
            <li class="col-xs-6 col-md-4 product m-product" data-groups='["mens"]'>
                <div class="img-bg-color primary">
                    <h5 class="product-price">$49</h5>
                    <a href="single-product.html" class="product-link"></a>
                    <!-- / product-link -->
                    <img src="http://placehold.it/900x1200" alt="">
                    <!-- / product-image -->

                    <!-- product-hover-tools -->
                    <div class="product-hover-tools">
                        <a href="single-product.html" class="view-btn" data-toggle="tooltip" title="View Product">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="shopping-cart.html" class="cart-btn" data-toggle="tooltip" title="Add to Cart">
                            <i class="lnr lnr-cart"></i>
                        </a>
                    </div><!-- / product-hover-tools -->

                    <!-- product-details -->
                    <div class="product-details">
                        <h5 class="product-title">ΟΝΟΜΑ</h5>
                        <p class="product-category">ΚΑΤΗΓΟΡΙΑ</p>
                    </div><!-- / product-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / product -->

            <!-- product -->
            <li class="col-xs-6 col-md-4 product m-product" data-groups='["womens", "accessories"]'>
                <div class="img-bg-color primary">
                    <h5 class="product-price"><del>$159</del> $79</h5>
                    <a href="single-product.html" class="product-link"></a>
                    <!-- / product-link -->
                    <img src="http://placehold.it/900x1200" alt="">
                    <!-- / product-image -->

                    <!-- product-hover-tools -->
                    <div class="product-hover-tools">
                        <a href="single-product.html" class="view-btn" data-toggle="tooltip" title="View Product">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="shopping-cart.html" class="cart-btn" data-toggle="tooltip" title="Add to Cart">
                            <i class="lnr lnr-cart"></i>
                        </a>
                    </div><!-- / product-hover-tools -->

                    <!-- product-details -->
                    <div class="product-details">
                        <h5 class="product-title">PRODUCT TITLE</h5>
                        <p class="product-category">CATEGORY</p>
                    </div><!-- / product-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / product -->

            <!-- product -->
            <li class="col-xs-6 col-md-4 product m-product" data-groups='["mens"]'>
                <div class="img-bg-color primary">
                    <h5 class="product-price">$39</h5>
                    <a href="single-product.html" class="product-link"></a>
                    <!-- / product-link -->
                    <img src="http://placehold.it/900x1200" alt="">
                    <!-- / product-image -->

                    <!-- product-hover-tools -->
                    <div class="product-hover-tools">
                        <a href="single-product.html" class="view-btn" data-toggle="tooltip" title="View Product">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="shopping-cart.html" class="cart-btn" data-toggle="tooltip" title="Add to Cart">
                            <i class="lnr lnr-cart"></i>
                        </a>
                    </div><!-- / product-hover-tools -->

                    <!-- product-details -->
                    <div class="product-details">
                        <h5 class="product-title">PRODUCT TITLE</h5>
                        <p class="product-category">CATEGORY</p>
                    </div><!-- / product-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / product -->

            <!-- product -->
            <li class="col-xs-6 col-md-4 product m-product" data-groups='["accessories"]'>
                <div class="img-bg-color primary">
                    <h5 class="product-price">$189</h5>
                    <a href="single-product.html" class="product-link"></a>
                    <!-- / product-link -->
                    <img src="http://placehold.it/900x1200" alt="">
                    <!-- / product-image -->

                    <!-- product-hover-tools -->
                    <div class="product-hover-tools">
                        <a href="single-product.html" class="view-btn" data-toggle="tooltip" title="View Product">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="shopping-cart.html" class="cart-btn" data-toggle="tooltip" title="Add to Cart">
                            <i class="lnr lnr-cart"></i>
                        </a>
                    </div><!-- / product-hover-tools -->

                    <!-- product-details -->
                    <div class="product-details">
                        <h5 class="product-title">PRODUCT TITLE</h5>
                        <p class="product-category">CATEGORY</p>
                    </div><!-- / product-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / product -->

            <!-- product -->
            <li class="col-xs-6 col-md-4 product m-product" data-groups='["womens"]'>
                <div class="img-bg-color primary">
                    <h5 class="product-price">$69</h5>
                    <a href="single-product.html" class="product-link"></a>
                    <!-- / product-link -->
                    <img src="http://placehold.it/900x1200" alt="">
                    <!-- / product-image -->

                    <!-- product-hover-tools -->
                    <div class="product-hover-tools">
                        <a href="single-product.html" class="view-btn" data-toggle="tooltip" title="View Product">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="shopping-cart.html" class="cart-btn" data-toggle="tooltip" title="Add to Cart">
                            <i class="lnr lnr-cart"></i>
                        </a>
                    </div><!-- / product-hover-tools -->

                    <!-- product-details -->
                    <div class="product-details">
                        <h5 class="product-title">PRODUCT TITLE</h5>
                        <p class="product-category">CATEGORY</p>
                    </div><!-- / product-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / product -->

            <!-- product -->
            <li class="col-xs-6 col-md-4 product m-product" data-groups='["accessories"]'>
                <div class="img-bg-color primary">
                    <h5 class="product-price">$359</h5>
                    <a href="single-product.html" class="product-link"></a>
                    <!-- / product-link -->
                    <img src="http://placehold.it/900x1200" alt="">
                    <!-- / product-image -->

                    <!-- product-hover-tools -->
                    <div class="product-hover-tools">
                        <a href="single-product.html" class="view-btn" data-toggle="tooltip" title="View Product">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="shopping-cart.html" class="cart-btn" data-toggle="tooltip" title="Add to Cart">
                            <i class="lnr lnr-cart"></i>
                        </a>
                    </div><!-- / product-hover-tools -->

                    <!-- product-details -->
                    <div class="product-details">
                        <h5 class="product-title">PRODUCT TITLE</h5>
                        <p class="product-category">CATEGORY</p>
                    </div><!-- / product-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / product -->

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
            <div class="item"><img src="http://placehold.it/350x150" alt=""></div>
            <div class="item"><img src="http://placehold.it/350x150" alt=""></div>
            <div class="item"><img src="http://placehold.it/350x150" alt=""></div>
            <div class="item"><img src="http://placehold.it/350x150" alt=""></div>
            <div class="item"><img src="http://placehold.it/350x150" alt=""></div>
            <div class="item"><img src="http://placehold.it/350x150" alt=""></div>
            <div class="item"><img src="http://placehold.it/350x150" alt=""></div>
            <div class="item"><img src="http://placehold.it/350x150" alt=""></div>
            <div class="item"><img src="http://placehold.it/350x150" alt=""></div>
            <div class="item"><img src="http://placehold.it/350x150" alt=""></div>
        </div>
    </div><!-- / container -->
</section>
<!-- / brands carousel -->
