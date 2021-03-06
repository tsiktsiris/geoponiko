<!-- header -->
<header>

    <!-- nav -->
    <nav class="navbar navbar-default nav-sec navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{asset('./images/logo-lg.png')}}" alt="logo"></a>
            </div><!-- / navbar-header <span class="cart-badge">2</span> -->
            <div class="secondary-nav">
                <!--<a href="#" class="my-account space-right"><i class="fa fa-user"></i> </a>-->
                <a href="{{route('frontend.cart')}}" class="shopping-cart"> ΚΑΛΑΘΙ <i class="fa fa-shopping-cart"></i>

                  <?php

                  $cart = Session::get('phpcart');

                   ?>
                   @if($cart)
                  @if($cart->count() != 0)
                  <span class="cart-badge">{{$cart->count()}}</span>
                  @endif
                  @endif


                 </a>
            </div>

            <div class="navbar-collapse collapse text-center">
                <ul class="nav navbar-nav">
                    <li class="{!! classActivePath('/') !!}"><a href="{{route('frontend.home')}}"><span>ΑΡΧΙΚΗ</span></a></li>


                    @foreach($categories as $category)

                    <li class="dropdown
                    @foreach($category->getSubCategories as $subcategory)
                    {!! classActivePath('shop/'.$subcategory->id) !!}
                    @endforeach


                    ">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>{{$category->name}}</span> <span class="dropdown-icon"></span></a>
                    <ul class="dropdown-menu animated fadeIn fast">
                      @foreach($category->getSubCategories as $subcategory)
                        <li class="{!! classActivePath('shop/'.$subcategory->id) !!}"><a href="{{route('frontend.shop',$subcategory->id)}}"><span>{{$subcategory->name}}</span></a></li>
                      @endforeach
                    </ul>
                    </li>
                    @endforeach
                    <!--
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>ΣΠΟΡΟΙ/ΦΥΤΑ</span> <span class="dropdown-icon"></span></a>
                    <ul class="dropdown-menu animated fadeIn fast">
                        <li><a href="#"><span>ΔΕΝΤΡΑ</span></a></li>
                        <li><a href="#"><span>ΛΟΥΛΟΥΔΙΑ</span></a></li>
                        <li><a href="#"><span>ΣΠΟΡΟΙ</span></a></li>
                        <li><a href="#"><span>ΓΛΑΣΤΡΕΣ</span></a></li>
                    </ul>
                    </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>ΕΡΓΑΛΕΙΑ</span> <span class="dropdown-icon"></span></a>
                    <ul class="dropdown-menu animated fadeIn fast">
                        <li><a href="#"><span>ΧΕΙΡΟΣ</span></a></li>
                        <li><a href="#"><span>ΒΕΝΖΙΝΟΚΙΝΗΤΑ</span></a></li>
                        <li><a href="#"><span>ΑΝΑΛΩΣΙΜΑ</span></a></li>
                        <li><a href="#"><span>ΕΙΔΗ ΚΗΠΟΥ</span></a></li>
                    </ul>
                    </li>

                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>ΟΙΝΟΠΟΙΗΤΙΚΑ/ΜΕΛΙΣΣΟΚΟΜΙΚΑ</span> <span class="dropdown-icon"></span></a>
                    <ul class="dropdown-menu animated fadeIn fast">
                        <li><a href="#"><span>ΟΙΝΟΠΟΙΗΤΙΚΑ</span></a></li>
                        <li><a href="#"><span>ΜΕΛΙΣΣΟΚΟΜΙΚΑ</span></a></li>
                    </ul>
                    </li>

                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>ΑΡΔΕΥΣΗ</span> <span class="dropdown-icon"></span></a>
                    <ul class="dropdown-menu animated fadeIn fast">
                        <li><a href="#"><span>ΣΩΛΗΝΕΣ</span></a></li>
                        <li><a href="#"><span>ΔΕΞΑΜΕΝΕΣ</span></a></li>
                        <li><a href="#"><span>ΕΞΑΡΤΗΜΑΤΑ</span></a></li>
                    </ul>
                    </li>
                  -->
                    <li><a href="#"><span>ΠΡΟΣΦΟΡΕΣ</span></a></li>

                </ul>
            </div><!--/ nav-collapse -->
        </div><!-- / container -->
    </nav>
    <!-- / nav -->
</header>
<!-- / header -->
