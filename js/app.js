//do not remove this line of code
$(document).foundation();


//Scrolling
(function() {
	"use strict";
	console.log("SEAF fired");

	var nav = document.querySelector("#mainNav");
	var links = nav.querySelectorAll("a");

	//function
	function scrollit(evt) {
	console.log(evt.target.id);

	var idNum = evt.target.id;
	console.log("scroll"+idNum)	;
	TweenLite.to(window, 1, {scrollTo:"#scroll"+idNum, offsetY:-10});
	}

	for(var s=0; s<links.length; s++){
		links[s].addEventListener("click", scrollit, false);
	}
//Scroll end

})();
