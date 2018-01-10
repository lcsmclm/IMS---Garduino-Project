@extends('layout.app')
@section('content')
<div class="row no-gutters screenrow">
<div class='plant-list statlist col-xl-4 col-lg-5 col-md-6 leftpanel'>
  <h1>My Statistics</h1>
    <div class='plantlist-feed'>
@foreach($usrplants as $plant)
<div class='plantlist-single-container'>
<!-- <p>{{ $plant->plantlist_name }}</p> -->
<a class='statistic-gnome' data-id='{{$plant->id}}' href='#'>
  <div class='plantlist-single-preview'>
    <h3>{{$plant->name}}</h3>
    </a>
  </div><div class='arrow'><i class='fa fa-chevron-right' aria-hidden='true'></i></div></div>
  @endforeach
</div>
</div>
<div class='plantlist-details statistic-detail-container col-xl-8 col-lg-7 col-md-6 rightpanel'><h3 class='initial-detail'>Select a plant to view infomation.</h3></div>
</div>
@endsection
