@extends('layout.app')
@section('content')
<!--TODO:
Fix iOS status icons from collapsing
Add close button
-->
<div class='new-gnome-header' style='position: relative'>
  <div class='closer' style='padding: 1rem; position: absolute; top: 0; left:0; color: #000'><a style='color: #000; text-decoration: none; font-size: 2rem' href='/'><i class="fa fa-times" aria-hidden="true"></i></a></div>
  <div class='new-gnome-image'>
<img src="images/profilep-orange.svg" class="img-fluid profile-pic">
<p class="last-updated connected">Connected</p>
</div>
<div class='new-gnome-header-info'>
  <h2>New Gnome</h2>
  <p>id: 28938102</p>
  <div class="row">
          <div class="status"><img src="images/moisture.svg" class="img-fluid moisture-symbol"><p class="moisture">On</p></div>
          <div class="status"><img src="images/thermometer.svg" class="img-fluid thermometer-symbol"><p class="thermometer">On</p></div>
          <div class="status"><img src="images/sun.svg" class="img-fluid sun-symbol"><p class="sun">On</p></div>
  </div>
</div>
</div>
<div class='general-settings addgnome row'>
<form method='post' id='user-changes' class='edit-form' action="/">
  <div class='setting-field'>
  <h3>General Info</h3>
  </div>
  <div class='setting-field'>
    <label for='email'>Name:</label>
    <input name='email' value='New Gnome'>
  </div>
  <div class='setting-field'>
    <label for='name'>Thumbnail:</label>
 <input type="file" name="fileToUpload" id="fileToUpload">
  </div>

  <div class='setting-field'>
  <h3>Plant Info</h3>
  </div>
  <div class='setting-field'>
    <label for='oldpass'>Plant Type:</label>
    <input name='oldpass'>
  </div>
  <div class='setting-field'>
    <label for='newpass'>Plant Location:</label>
    <select name="location">
    <option value="Indoors">Indoors</option>
    <option value="Outdoors">Outdoors</option>
  </select>
  </div>
  <h2><input class='std-btn' id='add-plant' type="submit" value="Add Plant"></h2>
</form>
<script>
//Remove script in full production
document.getElementById("user-changes").onsubmit = function() {myFunction(event)};
function myFunction(event) {
    event.preventDefault();
    return false;
}
</script>
</div>
@endsection
