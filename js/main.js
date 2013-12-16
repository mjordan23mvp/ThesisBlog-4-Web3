var dtt = document.getElementById("dtt");

var d1 = document.getElementById("d1");
var d2 = document.getElementById("d2");
var d3 = document.getElementById("d3");
var d4 = document.getElementById("d4");
var cp = document.getElementById("copyright");

var fb = document.getElementById("feedback");
var gb = document.getElementById("guestbook");

var yy = document.getElementById("yuyi");
var it = document.getElementById("intro");

var em = document.getElementById("email");
var ee = document.getElementById("ee");

init();

function init(){
  dtt.classList.toggle("is-active");
  
  d1.classList.toggle("is-active");
  d2.classList.toggle("is-active");
  d3.classList.toggle("is-active");
  d4.classList.toggle("is-active");
  cp.classList.toggle("is-active");

   dtt.addEventListener("is-active",function(evt){
   evt.preventDefault();
},false)

   d1.addEventListener("is-active",function(evt){
   evt.preventDefault();
},false) 
   d2.addEventListener("is-active",function(evt){
   evt.preventDefault();
},false)
   d3.addEventListener("is-active",function(evt){
   evt.preventDefault();
},false)
   d4.addEventListener("is-active",function(evt){
   evt.preventDefault();
},false) 
   cp.addEventListener("is-active",function(evt){
   evt.preventDefault();

},false) 
  yy.addEventListener("click",function(evt){
  evt.preventDefault();
  yy.classList.toggle("is-clicked");
  it.classList.toggle("is-active");
},false)
  em.addEventListener("click",function(evt){
  evt.preventDefault();
  em.classList.toggle("is-clicked");
  ee.classList.toggle("is-active");
},false)
  fb.addEventListener("click",function(evt){
  evt.preventDefault();
  fb.classList.toggle("is-clicked");
  gb.classList.toggle("is-active");
},false) 
}