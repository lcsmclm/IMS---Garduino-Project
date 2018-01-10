<div class="profile-banner" style="background-image: url('images/{{$usrplants->image}}')">
  <!-- <img src="images/profilep-orange.svg" class="img-fluid profile-pic"><p class="last-updated">2m Ago</p> -->
</div>
<div class="row info">
<div class="col-12">
<div class='info-head'>




<h2>{{$usrplants->Title}} <div class='alert-profile @if ($usrplants->alert_status == 0)
passive

  @endif'><img src="images/alert-symbol.svg" class="img-fluid"/></div></h2>
<h3>{{$usrplants->name}}</h3>
<div class="row statusbox">
<div class="status"><img src="images/moisture.svg" class="img-fluid moisture-symbol"><p class="moisture">{{$usrplants->current_moisture}}%</p></div>
<div class="status"><img src="images/thermometer.svg" class="img-fluid thermometer-symbol"><p class="thermometer">{{$usrplants->current_temp}}°C</p></div>
<div class="status"><img src="images/sun.svg" class="img-fluid sun-symbol"><p class="sun">
  @if ($usrplants->current_light <= 25)
  Low
  @elseif ($usrplants->current_light <= 50)
  Low/Med
  @elseif ($usrplants->current_light <= 75)
  Med
  @elseif ($usrplants->current_light <= 100)
  High
  @endif
</p></div>
</div>
</div>
<div class='profile-details'>
<div class='profile-status'>
<div class='status-data row moisture-stats'>
<div class="status status-ico"><img src="images/moisture.svg" class="img-fluid moisture-symbol"></div>
<div class="progress">
<div class="min-data progress-bar" role="progressbar" style="width: 35%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
<div class="ideal-data progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
<div class="max-data progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
<div class='data-gauge' style='left: {{$usrplants->current_moisture}}%'></div>
</div>
</div>
<div class='status-data row thermo-stats'>
<div class="status status-ico"><img src="images/thermometer.svg" class="img-fluid moisture-symbol"></div>
<div class="progress">
<div class="min-data progress-bar" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
<div class="ideal-data progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
<div class="max-data progress-bar bg-info" role="progressbar" style="width: 55%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
<div class='data-gauge' style='left: {{$res = ($usrplants->current_temp / 45) * 100}}%'></div>
</div>

</div>
<div class='status-data row sun-stats'>
<div class="status status-ico"><img src="images/sun.svg" class="img-fluid moisture-symbol"></div>
<div class="progress">
<div class="min-data progress-bar" role="progressbar" style="width: 55%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
<div class="ideal-data progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
<div class="max-data progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
<div class='data-gauge' style='left: {{$usrplants->current_light}}%'></div>
</div>
</div>

</div>
<div class='external-profile-links profile-large-links'>
<p class='statistics'><a href='#'>Statistics</a></p>
<p class='plantinfo'><a href='#'>Plant Info</a></p>
</div>
</div>
