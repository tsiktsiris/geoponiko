@extends('layouts.frontend.dashboard')
@section('content')



@if($payment == 2)
<div style="padding-top:20%;padding-bottom:20%" id="checkout">
  <h4 style="color:rgb(50,150,50);" class="text-center">Η παραγγελία σας ολοκληρώθηκε επιτυχώς</h4>
  <p class="text-center">
    Θα επικοινωνήσουμε μαζί σας τηλεφωνικώς για την επιβεβαίωση της το συντομότερο δυνατό
  </p>
</div>

@elseif($payment == 1)

<div style="padding-top:20%;padding-bottom:20%" id="checkout">
  <h4 style="color:rgb(50,150,50);" class="text-center">Η παραγγελία σας ολοκληρώθηκε επιτυχώς</h4>
  <p class="text-center">
    Θα επικοινωνήσουμε μαζί σας τηλεφωνικώς μόλις γίνει η επιβεβαίωση της κατάθεσης από το λογιστήριο
  </p>
</div>

@endif
@endsection
