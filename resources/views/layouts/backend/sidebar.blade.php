<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('images/avatar_default.jpg')}}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->name}}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Συνδεδεμένος</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
        <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">

      <li class="header">ΚΥΡΙΑ ΠΛΟΗΓΗΣΗ</li>

      <!-- Optionally, you can add icons to the links-->
      <li class="{!! classActivePath('home') !!}"><a href="{{ route('backend.home') }}"><span>Αρχική</span></a></li>
      <li class="{!! classActiveSegment(2,['products']) !!}"><a href="{{ route('backend.products.index') }}"><span>Διαχείριση προϊόντων</span></a></li>
      <li class="{!! classActiveSegment(2,['produ1cts']) !!}"><a href="#"><span>Προσφορές</span></a></li>
      <li class="treeview {!! classActiveSegment(2,['orders']) !!}">
        <a href="#"><span>Παραγγελίες</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="{!! classActiveSegment(3,['unconfirmed']) !!}"><a href="{{route('backend.orders.unconfirmed.index')}}">Προς επιβεβαίωση</a></li>
          <li class="{!! classActiveSegment(3,['packaging']) !!}"><a href="{{route('backend.orders.packaging.index')}}">Σε αναμονή</a></li>
          <li class="{!! classActiveSegment(3,['completed']) !!}"><a href="{{route('backend.orders.completed.index')}}">Ολοκληρωμένες</a></li>
        </ul>
      </li>

      <li class="treeview {!! classActiveSegment(2,['categories']) !!}">
        <a href="#"><span>Κατηγορίες προϊόντων</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="{!! classActiveSegment(3,['main']) !!}"><a href="{{route('backend.category.index')}}">Κατηγορίες</a></li>
          <li class="{!! classActiveSegment(3,['sub']) !!}"><a href="{{route('backend.subcategory.index')}}">Υποκατηγορίες</a></li>
        </ul>
      </li>
      <li class="treeview {!! classActiveSegment(2,['users']) !!}">
        <a href="#"><span>Χρήστες</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="{!! classActiveSegment(3,['list','new','edit']) !!}"><a href="{{route('backend.users.index')}}">Διαχείριση χρηστών</a></li>
        </ul>
      </li>



    </ul><!-- /.sidebar-menu -->
  </section>

</aside>
