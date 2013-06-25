$(document).ready(function(){

var myLinks = document.getElementsByClassName('info-link');
for(var i = 0; i < myLinks.length; i++){
   myLinks[i].addEventListener('touchstart', function(){this.className = "hover";}, false);
   myLinks[i].addEventListener('touchend', function(){this.className = "";}, false);
}

});

var navigation = responsiveNav("#nav");


/* 
 * Create HTML5 elements for IE's sake
 */

document.createElement("article");
document.createElement("section");
