
<article class='plantdetail'>
  <div class='close' style='z-index: 3; position: absolute; top: 0; left: 0; padding: 1rem;'><a href='#'><i class="fa fa-times" aria-hidden="true"></i></a></div>
  <div class="profile-banner" style="background-image: url('images/{{$plant->plantlist_img}}')">
  <!-- <img src="images/profilep-orange.svg" class="img-fluid profile-pic"><p class="last-updated">2m Ago</p> -->
</div>
<div class='profile-details-content'>
<h2>{{$plant->plantlist_name}}</h2>
<p class='title'>Description</p>
<p>{{$plant->plantlist_desc}}</p>
<div class="profile-status">
        <div class="status"><img src="images/moisture.svg" class="img-fluid moisture-symbol"><p class="moisture">68%</p></div>
        <div class="status"><img src="images/thermometer.svg" class="img-fluid thermometer-symbol"><p class="thermometer">25°C</p></div>
        <div class="status"><img src="images/sun.svg" class="img-fluid sun-symbol"><p class="sun">Low</p></div>
</div>
<p class='title'>Care</p>
<p>{{$plant->plantlist_care}}</p>
<div class='external-profile-links profile-large-links'>
<p class='statistics'><a href='#'>Statistics</a></p>
<p class='plantinfo'><a href='#'>Plant Info</a></p>
</div>
</div>

</article>
