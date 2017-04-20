
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Γεωπονικό Κέντρο Ιστιαίας">
<meta name="keywords" content="responsive, retina ready, html5, css3, shop, market, onli store, bootstrap theme" />
<meta name="author" content="tsiktsiris@sch.gr">

<!-- favicon -->
<link rel="icon" href="images/favicon.png">
<!-- page title -->
<title>Γεωπονικό Κέντρο Ιστιαίας</title>
<!-- bootstrap css -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- css -->
<link href="css/style.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/linear-icons.css">
@yield('css')
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

<!-- preloader -->
<div id="preloader">
    <div class="spinner spinner-round"></div>
</div>
<!-- / preloader -->

<div id="top"></div>

@include('layouts.frontend.header')

<!-- content -->
@yield('content')
<!-- / content -->

<!-- scroll to top -->
<a href="#top" class="scroll-to-top page-scroll is-hidden" data-nav-status="toggle"><i class="fa fa-angle-up"></i></a>
<!-- / scroll to top -->

@include('layouts.frontend.footer')

<!-- javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- sticky nav -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav-sticky.js"></script>
<!-- / sticky nav -->

<!-- shop -->
<script src="js/custom.js"></script>
<script src="js/jquery.shuffle.min.js"></script>
<!-- / shop -->

<!-- brands carousel -->
<script src="js/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
      $("#brands-carousel").owlCarousel({
        autoPlay: 5000, //set autoPlay to 5 seconds.
        items : 5,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
</script>
<!-- / brands carousel -->

<!-- preloader -->
<script src="js/preloader.js"></script>
<!-- / preloader -->

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

<!-- hide nav -->
<script src="js/hide-nav.js"></script>
<!-- / hide nav -->
@yield('js')
<!-- / javascript -->
</body>

</html>
