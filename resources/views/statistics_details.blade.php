<style> /* set the CSS */

.line {
  fill: none;
    stroke: steelblue;
    stroke-width: 8px;
    stroke-dasharray: 0;
}
.line:nth-child(2n) {
    fill: none;
  stroke: rgba(255, 0, 0, 0.5);
  stroke-width: 3px;
  stroke-dasharray: 5;

}

.grid line {
  stroke: lightgrey;
  stroke-opacity: 0.7;
  shape-rendering: crispEdges;
}

.grid path {
  stroke-width: 0;
}
.axisHorizontal path, .axisVertical path{
  stroke-width: 3px;
}
.axisHorizontal text, .axisVertical text{
 font-size: 0.8rem;
}
</style>
<div class='stat-data'>
  <div class='close' style='z-index: 3; position: absolute; top: 0; left: 0; padding: 1rem;'><a style='color:#000; text-decoration: none;' href='#'><i class="fa fa-times" aria-hidden="true"></i></a></div>
<h2>{{$usrplant->Title}}</h2>
<p>{{$usrplant->name}}</p>
<div class='button-data'>
  <h3>Mode</h3>
    <div class="select"><button type="button" id="moistureselect">Moisture</button><button type="button" id="tempselect">Temperature</button><button type="button" id="lightselect">Light</button></div>
<h3>Time</h3>
    <div class="new"><button type="button" id="week">1 Week</button><button type="button" id="month">1 Month</button><button type="button" id="months">3 Months</button></div>
      </div>
    <div class="temp"></div>
    <div class="datadiv"><ul class="data-details"></ul></div>

</div>
