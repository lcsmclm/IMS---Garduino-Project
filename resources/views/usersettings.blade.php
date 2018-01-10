@extends('layout.app')
@section('content')
<div class='general-settings'>
<h1>General Settings</h1>
<form method='post' id='user-changes' class='edit-form' action="/">
  <div class='setting-field'>
    <label for='email'>Email:</label>
    <input name='email' value='{{ Auth::user()->email }}'>
  </div>
  <div class='setting-field'>
    <label for='name'>Name:</label>
    <input name='name' value='{{ Auth::user()->name }}'>
  </div>
  <div class='setting-field'>
    <label for='oldpass'>Old Password:</label>
    <input name='oldpass'>
  </div>
  <div class='setting-field'>
    <label for='newpass'>New Password:</label>
    <input name='newpass' >
  </div>
  <div class='setting-field'>
    <label for='confpass'>Confirm Password:</label>
    <input name='confpass'>
  </div>
  <div class='setting-field'>
    <label for='temp'>Temperature:</label>
    <select name="temp">
  <option value="celcius">°C</option>
  <option value="fahrenheit">°F</option>
</select>
  </div>
  <h2><input class='std-btn' id='user-save' type="submit" value="Save Changes"></h2>
</form>
<h2><a class='std-btn' id='user-logout' href='/logout'>Logout</a></h2>
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
