@extends('layout.app')
@section('content')
<div class="row no-gutters screenrow">
<div class='plant-list col-xl-4 col-lg-5 col-md-6 leftpanel'>
  <div class='search-form'>
    <form method='get' action='index.php'>
        <label  name='searchstring' for="searchstring"><i class="fa fa-search" aria-hidden="true"></i></label>
        <input type="search" placeholder='Search...' name="searchstring" id="searchstring" value='<?php if(isset($_GET['searchstring'])){echo$q;}?>'>
    </form>
  </div>
  <h2>Browse All Plants</h2>
  <div class='plantlist-feed'>


 @foreach($plants as $plant)
 <div class='plantlist-single-container'>
 <!-- <p>{{ $plant->plantlist_name }}</p> -->
 <a data-id='{{$plant->plantlist_id}}' href='#'>
   <div class='plantlist-single-preview'>
     <h3>{{$plant->plantlist_name}}</h3>
     </a>
   </div><div class='arrow'><i class='fa fa-chevron-right' aria-hidden='true'></i></div></div>
   @endforeach
 </div>
</div>
 <div class='plantlist-details col-xl-8 col-lg-7 col-md-6 rightpanel'><h3 class='initial-detail'>Select a plant to view infomation.</h3></div>
</div>
@endsection
