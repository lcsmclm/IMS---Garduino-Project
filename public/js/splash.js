(function(){
var leaf = document.querySelector('.leafloader');
var loginCont = document.querySelector('.login-load');
window.addEventListener('load', function(){
  setTimeout(function()
  {
    leaf.classList.remove('loading');
    leaf.classList.add('unload');

    setTimeout(function(){
      leaf.style.display = "none";
loginCont.classList.add('fadeIn');

}, 400);
},3000);
}, false);
})();
