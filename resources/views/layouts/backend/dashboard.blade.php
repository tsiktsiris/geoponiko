<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{ $title or "AdminLTE Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("css/backend/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Arimo&amp;subset=greek" rel="stylesheet">
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("css/backend/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/backend/select2.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("css/backend/skins/skin-green.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("css/backend/custom.css")}}" rel="stylesheet" type="text/css" />
    @yield('css');
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
body {
    overflow:hidden;
}
</style>
  </head>
  <body class="skin-green fixed">
    <div class="wrapper">

      <!-- Header -->
      @include('layouts.backend.header')

      <!-- Sidebar -->
      @include('layouts.backend.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @if(classActiveSegment(1,['home'])!="active")
        <section class="content-header">
          <h1>
            {{ $title or "No title" }}
            <small>{{ $description or null }}</small>
          </h1>
          <!-- You can dynamically generate breadcrumbs here ".  $path = app('request')->root().'/'.$segment ." -->

          <ol class="breadcrumb">
          <li><a href=" {{ route('backend.home') }}"><i class="fa fa-dashboard"></i>Αρχική</a></li>

          <?php
           $path = app('request')->path();
           $segments = explode("/", $path);
           $len = count($segments);
           $i=0;

            foreach($segments as $segment)
            {
              $segment = urldecode($segment);
              if($segment != 'Αρχική')
                if ($i != $len - 1)
                  echo "<li><a href='#'>".ucfirst($segment)."</a></li>";
                else
                  echo '<li class="active">' .ucfirst($segment).'</li>';

              $i++;
            }

            ?>


          </ol>
        </section>
        @endif
        <!-- Main content -->
        <section class="content">
          <!-- Your Page Content Here -->
          @yield('content')
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Footer -->
      @include('layouts.backend.footer')

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->


    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ("js/backend/jquery-3.1.1.min.js") }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("js/backend/bootstrap.min.js") }}" type="text/javascript"></script>
    <!-- Slimscroll plugin -->
    <script src="{{ asset ("js/backend/jquery.slimscroll.min.js") }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ("js/backend/app.js") }}" type="text/javascript"></script>

    <script src="{{ asset ("js/backend/select2.min.js") }}" type="text/javascript"></script>
    @yield('javascript');
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience -->
  </body>
</html>
