@extends('layouts.frontend.dashboard')
@section('content')
<!-- header-banner -->

<!-- / header-banner -->
<!-- shop right-sidebar -->
<section id="shop" style="padding-top:100px" class="space-top-30">
    <div class="container">
        <div class="row">

            <div class="col-sm-8 col-md-9 content-area">
                <p class="shop-results space-left">Προβολή <strong>{{$products->firstItem()}}-{{$products->lastItem()}}</strong> από <strong>{{$products->total()}}</strong> προϊόντα.
                    <span class="pull-right space-right">
                        <select class="selectpicker">
                            <optgroup label="Sort By:">
                                <option>Default</option>
                                <option>Popularity</option>
                                <option>Newness</option>
                                <option>Rating</option>
                                <option>Price Low to High</option>
                                <option>Price High to Low</option>
                            </optgroup>
                        </select>
                    </span>
                </p>
                <ul class="row shop list-unstyled" id="grid">
                @foreach($products as $product)

                    <!-- product -->
                    <li class="col-xs-6 product m-product" data-groups='["bedroom"]'>
                        <div class="img-bg-color primary">
                            <h5 class="product-price">{{$product->price}}€</h5>
                            <a href="single-product2.html" class="product-link"></a>
                            <!-- / product-link -->
                            <img src="{{asset('/images/products/'.$product->product_photo1)}}" alt="">
                            <!-- / product-image -->

                            <!-- product-hover-tools -->
                            <div class="product-hover-tools">
                                <a href="{{route('frontend.viewproduct',$product->id)}}" class="view-btn" data-toggle="tooltip" title="Προβολή">
                                    <i class="lnr lnr-eye"></i>
                                </a>
                                <a href="{{route('frontend.cart.add',$product->id)}}" class="cart-btn" data-toggle="tooltip" title="Προσθήκη στο καλάθι">
                                    <i class="lnr lnr-cart"></i>
                                </a>
                            </div><!-- / product-hover-tools -->

                            <!-- product-details -->
                            <div class="product-details">
                                <h5 class="product-title">{{$product->name}}</h5>
                                <p class="product-category">{{$product->getCategory->name}}</p>
                            </div><!-- / product-details -->
                        </div><!-- / img-bg-color -->
                    </li>
                    <!-- / product -->
                    @endforeach


                    <!-- sizer -->
                    <li class="col-xs-6 shuffle_sizer"></li>
                    <!-- / sizer -->

                </ul> <!-- / products -->

                <div class="text-center more-button space-top-30">
                    <a href="#x" class="btn btn-default-filled"><i class="lnr lnr-sync"></i><span>LOAD MORE</span></a>
                </div>

            </div><!-- / content-area -->

            <div class="col-sm-4 col-md-3 sidebar-area">

                <!-- filter-by-price widget -->
                <div class="widget">
                    <h5 class="widget-title">FILTER BY PRICE</h5>

                    <div id="range-slider" class="noUi-target noUi-rtl noUi-horizontal">
                    </div><!-- / range-slider -->

                    <div class="range-filter">
                        <div class="column filter-button">
                            <button type="submit" class="btn btn-xs btn-default-filled btn-rounded">FILTER</button>
                        </div><!-- / filter-button -->
                        <div class=" column range-values">
                            <p>$<span class="value" id="range-slider-value-min"></span> - $<span class="value" id="range-slider-value-max"></span></p>
                        </div><!-- / range-values -->
                    </div><!-- / range-filter -->
                    <!-- / filter-by-price widget -->
                </div>
                <!-- / widget -->

                <!-- price-filter widget -->
                <div class="price-filter widget">
                    <h5 class="widget-title">PRICE FILTER</h5>

                    <p class="filter-item">
                        <a href="#">$1-$100</a>
                    </p><!-- / filter-item -->

                    <p class="filter-item">
                        <a href="#">$100-$200</a>
                    </p><!-- / filter-item -->

                    <p class="filter-item">
                        <a href="#">$200-$300</a>
                    </p><!-- / filter-item -->

                    <p class="filter-item">
                        <a href="#">$300-$400</a>
                    </p><!-- / filter-item -->

                    <p class="filter-item">
                        <a href="#">$400-$500</a>
                    </p><!-- / filter-item -->

                </div>
                <!-- / price-filter widget -->



                <!-- categries widget -->
                <div class="categories-sidebar-widget widget no-border">
                    <h5 class="widget-title">ΚΑΤΗΓΟΡΙΕΣ</h5>
                    @foreach($categories as $category)
                    <p class="product-category">
                        <a href="#">{{$category->name}}</a>
                        <span class="pull-right">({{$category->getProducts->count()}})</span>
                    </p><!-- / category -->
                    @endforeach

                </div>
                <!-- / categories-sidebar-widget -->

                <!-- tags-sidebar-widget
                <div class="tags-sidebar-widget widget">
                    <div class="widget-title">
                        <h5 class="widget-title">PRODUCT TAGS</h5>
                    </div>
                    <p>
                        <a href="#" class="btn btn-xs btn-primary-filled">Fashion</a>
                        <a href="#" class="btn btn-xs btn-primary-filled">Furniture</a>
                        <a href="#" class="btn btn-xs btn-primary-filled">Tech</a>
                        <a href="#" class="btn btn-xs btn-primary-filled">Webshop</a>
                        <a href="#" class="btn btn-xs btn-primary-filled">Online Store</a>
                    </p>
                </div>
                <!-- / tags-sidebar-widget -->

            </div><!-- / sidebar-area -->

        </div><!-- / row -->
    </div><!-- / container -->
</section>
<!-- / shop right sidebar -->

@endsection
