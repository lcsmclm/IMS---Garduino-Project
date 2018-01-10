(function(){
  var xpndprof = document.querySelectorAll('.expand-profile');
  var prof = document.querySelectorAll('.plantselect li');
  var xpnd = document.querySelectorAll('.expand-button');
var mobileDetails = document.querySelector('.profile-status');
var usrplantdet = document.querySelector('.usrplant-detail');
mobileDetails.style.maxHeight = "0px";



  function toggleDropdown(event){
    var targ = event.currentTarget;
    var expandHeight = targ.parentNode.querySelector('.profile-status');
    // console.log(expandHeight);
    if(expandHeight.style.maxHeight == "0px"){
    expandHeight.style.maxHeight = "999px";

  } else{
    expandHeight.style.maxHeight = "0px";
  }
  //

}

function toggleDisplay(event){
  //alert('clicked');
  var targ = event.currentTarget;
  var id = targ.getAttribute('data-id');
  console.log(id);
  displayPlantRequest = createRequest();  ///subway car creation
if(displayPlantRequest===null){
  alert('ajax not working');
  return;
}
var url = "user/plantdetails/"+id;
displayPlantRequest.onreadystatechange = displayPlant; ///the scheduling for the car
displayPlantRequest.open("GET", url, true); //open tunnel
displayPlantRequest.send(null);
}

function displayPlant(){
  if(displayPlantRequest.readyState === 4) {
    var plantdata = displayPlantRequest.responseText;
usrplantdet.innerHTML = plantdata;

  }
}

for(var i = 0; i < xpnd.length; i++){
    xpnd[i].addEventListener('click', toggleDropdown, false);
  }


  if (matchMedia) {
    var mq = window.matchMedia("(min-width: 768px)");
    mq.addListener(WidthChange);
    WidthChange(mq);
  }

  // media query change
  function WidthChange(mq) {
    if (mq.matches) {
      mobileDetails.style.maxHeight = "0px";
      for(var i = 0; i < prof.length; i++){
        prof[i].addEventListener('click', toggleDisplay, true);
      }
    }
    if(!mq.matches) {
      for(var y = 0; y < prof.length; y++){
        prof[y].removeEventListener('click', toggleDisplay, true);
      //return;
      }

  }
  }
})();
