<!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
  <a href="{{route('backend.home')}}" class="logo"><b>AGRO</b>ΣΥΜΒ</a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu">
          <!-- Menu toggle button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-comments-o"></i>
            <span id="unread-label" class="label label-success"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">Δημόσια Συνομιλία</li>
            <li>
              <!-- inner menu: contains the messages -->
              <ul id="chat" class="menu">
                <h4><center>Φόρτωση...</center></h4>
              </ul><!-- /.menu -->
            </li>
            <li class="footer"><input id="send" class="form-control" type="text" placeholder="Πληκτρολογήστε μήνυμα" id="example-text-input"></li>
          </ul>
        </li><!-- /.messages-menu -->



        <!-- User Account Menu -->
        <li class="dropdown">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- hidden-xs hides the username on small devices so only the image appears.<li class="divider"></li> -->
            <span class="username"></span>
          </a>
          <ul class="dropdown-menu">

              <li><a href="{{ route('backend.home') }}">Ρύθμιση λογαριασμού</a></li>
              <li><a href="{{ route('backend.home') }}">Αποσύνδεση</a></li>


          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
