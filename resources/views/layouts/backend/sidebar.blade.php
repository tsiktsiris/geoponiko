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
      <li class="{!! classActiveSegment(2,['orders']) !!}"><a href="{{ route('backend.home') }}"><span>Παραγγελίες</span></a></li>
      <li class="{!! classActiveSegment(2,['products']) !!}"><a href="{{ route('backend.products.index') }}"><span>Διαχείριση προϊόντων</span></a></li>

      <li class="treeview {!! classActiveSegment(2,['categories']) !!}">
        <a href="#"><span>Κατηγορίες προϊόντων</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li class="{!! classActiveSegment(3,['main']) !!}"><a href="{{route('backend.category.index')}}">Κατηγορίες</a></li>
          <li class="{!! classActiveSegment(3,['sub']) !!}"><a href="{{route('backend.subcategory.index')}}">Υποκατηγορίες</a></li>
        </ul>
      </li>



    </ul><!-- /.sidebar-menu -->
  </section>

</aside>
