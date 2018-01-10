$(document).foundation();


(function() {
	"use strict";

//scroll


var about = document.querySelector("aboutPage");

//about page animation
var web = document.querySelector("#web");
var para2 = document.querySelector("#paragraph2");
var para3 = document.querySelector("#paragraph3");

//gallery page animation
var gallery = document.querySelector("#gallery");


var tl = new TimelineMax({repeat:0, repeatDelay:1});
var tl2 = new TimelineMax({repeat:0, repeatDelay:1});

var tlLogo = new TimelineMax({repeat:0, repeatDelay:1});

tlLogo.add(TweenLite.to(logo,4,{opacity:1}));
////header

var nav = document.querySelector("#mainNav");
var links = nav.querySelectorAll("a");

//function
function scrollit(evt) {
console.log(evt.target.id);

var idNum = evt.target.id;
console.log("scroll"+idNum)	;
TweenLite.to(window, 1, {scrollTo:"#scroll"+idNum, offsetY:20});
}

for(var s=0; s<links.length; s++){
	links[s].addEventListener("click", scrollit, false);
}

//Tween Fade in
//function activate
var wetShowUp = document.querySelector("#web");
var galleryShowUp = document.querySelector("#gallery");
console.log(galleryShowUp);

var screenPOS;
var story;
var gallery;
var web;

function activate() {
		screenPOS = window.scrollY;
		story = aboutShowUp.offsetTop;
		gallery = galleryShowUp.offsetTop;
web = webShowUp.offsetTop;
		//console.log(story);
		if(screenPOS+10>story) {
		console.log("para");
		tl2.add(TweenLite.to(para1,1,{opacity:1}));
		tl2.add(TweenLite.to(para2,1,{opacity:1}));
		tl2.add(TweenLite.to(para3,1,{opacity:1}));

		}
		if(screenPOS+10>gallery){
			tl.add(TweenLite.to(webShowUp,1,{opacity:1}));

		}
	}

	window.addEventListener("scroll", activate, false);
