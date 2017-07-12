<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <?php
      //echo base_path();
      date_default_timezone_set('Europe/Athens');
      $timestamp = filemtime(base_path()."/.git/index");

      $c1 = intval(date('Y',$timestamp))-2000;
      $c1 += intval(date('m',$timestamp));
      $c2 = intval(date('d',$timestamp));
      $c3 = intval(date('H',$timestamp));
      $c3 += intval(date('i',$timestamp));
      $c3 += intval(date('s',$timestamp));


      echo "<i>Ενημερώθηκε στις ".date('d/m/Y H:i:s',$timestamp)."</i>";




      ?>



    </div>
    <!-- Default to the left -->
    <a href="http://www.agrosymbouleutiki.gr">www.agrosymbouleutiki.gr</a>

</footer>
