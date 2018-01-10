// alert('loaded');
var detailscontainer = document.querySelector('.plantlist-details');
var singlePlants = document.querySelectorAll('.plantlist-single-container');
var formSrch = document.querySelector('.search-form form');
formSrch.addEventListener("submit", function(e){
e.preventDefault();
}, false);

(function(){


var searchField = document.querySelector("#searchstring");
var plantlist = document.querySelector('.plantlist-feed');





function showResults(e) {
	var str = e.currentTarget.value;
  console.log(str);
	searchRequest = createRequest();
	if(searchRequest===null) {
		alert('browser does not support ajax, please update');
		return;
	} else {

	// var url1 = "/plantlist/search/"+str;
	// console.log(url1);
	if(str.length !==0){
		var url1 = "/plantlist/search/"+str;
		searchRequest.onreadystatechange = searchStatus;
		searchRequest.open("GET", url1, true);
		searchRequest.send(null);
	}


}
}

function searchStatus(){
	lastSearch = searchRequest.responseText;
	//console.log(lastSearch);
	if(searchRequest.readyState===4 || searchRequest.readyState==="complete"){
		plantlist.innerHTML = lastSearch;
    var singlePlants = document.querySelectorAll('.plantlist-single-container');
    console.log(singlePlants);
    for(var i = 0; i < singlePlants.length; i++){
       singlePlants[i].addEventListener('click', plantDetails, false);
    }
	}

}





searchField.addEventListener("keyup", showResults, false);


})();

function plantDetails(e){
  e.preventDefault();
		detailscontainer.style.display = "block";
	if(detailscontainer.style.display == "none"){

	}
  var targ = e.currentTarget;
  var id = targ.querySelector('a').getAttribute('data-id');
  console.log(id);
  displayRequest = createRequest();  ///subway car creation
if(displayRequest===null){
  alert('ajax not working');
  return;
}
	var url = "/plantlist/detail/"+id;
displayRequest.onreadystatechange = displayStatus; ///the scheduling for the car
displayRequest.open("GET", url, true); //open tunnel
displayRequest.send(null);
}

function displayStatus() {
  if(displayRequest.readyState === 4) {
    var detdata = displayRequest.responseText;
detailscontainer.innerHTML = detdata;
var close = document.querySelector('.close');
var currcont = document.querySelector('.plantdetail');
console.log(close);
close.addEventListener('click', function(event){
  event.preventDefault();
  //alert('clicked');
  detailscontainer.style.display = "none";
});

  }
}
for(var i = 0; i < singlePlants.length; i++){
  singlePlants[i].addEventListener('click', plantDetails, false);
}
