var detailscontainer = document.querySelector('.plantlist-details');
var singlePlants = document.querySelectorAll('.plantlist-single-container');
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
	var url="plantlist_search.php?searchstring="+str;
	searchRequest.onreadystatechange = searchStatus;
	searchRequest.open("GET", url, true);
	searchRequest.send(null);
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
  var targ = e.currentTarget;
  var id = targ.querySelector('a').getAttribute('data-id');
  console.log(id);
  displayRequest = createRequest();  ///subway car creation
if(displayRequest===null){
  alert('ajax not working');
  return;
}
var url = "plantlist_details.php?id="+id;
displayRequest.onreadystatechange = displayStatus; ///the scheduling for the car
displayRequest.open("GET", url, true); //open tunnel
displayRequest.send(null);
}

function displayStatus() {
  if(displayRequest.readyState === 4) {
    var detdata = displayRequest.responseText;
detailscontainer.innerHTML = detdata;

  }
}
for(var i = 0; i < singlePlants.length; i++){
  singlePlants[i].addEventListener('click', plantDetails, false);
}
