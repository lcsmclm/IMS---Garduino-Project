@extends('layout.app')
@section('content')
<div class="row no-gutters screenrow">
    <div class="col-xl-4 col-lg-5 col-md-6 leftpanel">


        <ul class="plantselect">
  @foreach ($usrplants as $usrplant)
                <li data-id='{{$usrplant->id}}' style='border-right-color:
                  @if ($usrplant->color == 'orange')
                  #F7941D
                  @elseif ($usrplant->color == 'green')
                  #8DC641
                  @elseif ($usrplant->color == 'blue')
                  #29A9E1
                  @elseif ($usrplant->color == 'yellow')
                  #F9ED32
                  @endif '>

                    <div class="row profile">
                      <div class='alert-profile @if ($usrplant->alert_status == 0)
passive

                        @endif'><img src="images/alert-symbol.svg" class="img-fluid"/></div>
               <img src="images/profilep-orange.svg" class="img-fluid profile-pic"><p class="last-updated">2m Ago</p>
                </div>
                    <div class="row info">
                        <div class="col-12">
                            <h2>{{$usrplant->Title}}</h2><h3>{{$usrplant->name}}</h3>
                            <div class="row">
                                    <div class="status"><img src="images/moisture.svg" class="img-fluid moisture-symbol"><p class="moisture">{{$usrplant->current_moisture}}%</p></div>
                                    <div class="status"><img src="images/thermometer.svg" class="img-fluid thermometer-symbol"><p class="thermometer">
                                        {{$usrplant->current_temp}}°C
                                    </p></div>
                                    <div class="status"><img src="images/sun.svg" class="img-fluid sun-symbol"><p class="sun">
                                          @if ($usrplant->current_light <= 25)
                                          Low
                                          @elseif ($usrplant->current_light <= 50)
                                          Low/Med
                                          @elseif ($usrplant->current_light <= 75)
                                          Med
                                          @elseif ($usrplant->current_light <= 100)
                                          High
                                          @endif
                                        </p></div>
                            </div>
                        </div>
                    </div>
                    <div class='expand-profile row'>
                      <div class='profile-details'>
                        <div class='profile-status'>
                          <div class='status-data row moisture-stats'>
                            <div class="status status-ico"><img src="images/moisture.svg" class="img-fluid moisture-symbol"></div>
                          <div class="progress">
  <div class="min-data progress-bar" role="progressbar" style="width: 35%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="ideal-data progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="max-data progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
<div class='data-gauge' style='left: {{$usrplant->current_moisture}}%'></div>
</div>
                      </div>
                      <div class='status-data row thermo-stats'>
                        <div class="status status-ico"><img src="images/thermometer.svg" class="img-fluid moisture-symbol"></div>
                      <div class="progress">
<div class="min-data progress-bar" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
<div class="ideal-data progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
<div class="max-data progress-bar bg-info" role="progressbar" style="width: 55%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
<div class='data-gauge' style='left: {{$res = ($usrplant->current_temp / 45) * 100}}%'></div>
</div>

                  </div>
                  <div class='status-data row sun-stats'>
                    <div class="status status-ico"><img src="images/sun.svg" class="img-fluid moisture-symbol"></div>
                  <div class="progress">
<div class="min-data progress-bar" role="progressbar" style="width: 55%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
<div class="ideal-data progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
<div class="max-data progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
<div class='data-gauge' style='left: {{$usrplant->current_light}}%'></div>
</div>
              </div>

              <div class='external-profile-links'>
                <p class='statistics'><a href='#'>Statistics</a></p>
                <p class='plantinfo'><a href='#'>Plant Info</a></p>
              </div>
                    </div>
                      <div class='expand-button'>
                        <div></div>
                        <div></div>
                        <div></div>
                      </div>

                    </div>
                  </div>
                </li>

@endforeach
        </ul>

        <div class="addplant"><a href="/add-plant">Add Plant<img src="images/plus.svg" class="img-fluid plus"></a></div>



    </div>
    <div class="col-xl-8 col-lg-7 col-md-6 rightpanel">


        <article class="plantdetail usrplant-detail">
                <h3 class='initial-detail'>Select a plant to view infomation.</h3>


</article>


            </div>

        </div>


    </div>
</div>
@endsection
