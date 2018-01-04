(function (){
var phone = document.querySelector('.intro-phone-app img');
var text = document.querySelector('.article-text');
function sect2activate() {
screenPOS = window.scrollY;
picLoc = phone.offsetTop;
if(screenPOS>picLoc+500){
phone.classList.add('slide');
  window.removeEventListener("scroll", sect2activate, false);
  window.addEventListener("scroll", sect3activate, false);
}
}
function sect3activate() {
screenPOS = window.scrollY;
textLoc = text.offsetTop;
if(screenPOS>textLoc-500){
text.classList.add('fade');
  window.removeEventListener("scroll", sect3activate, false);
}
}
if(phone){
  window.addEventListener("scroll", sect2activate, false);
}

}());
