$(document).foundation();

// JavaScript Document


(function() {
	"use strict";
//console.log("SEAF Started!");


/*variables*/
var galleryImg = document.querySelectorAll(".galImg");
var galleryImgScreens = document.querySelectorAll(".galImg-screen");
var imgDescription = document.querySelector(".imgDescription");
var mainImg = document.querySelector(".full-gal-img");
var mainImgCont = document.querySelector(".full-img-cont");
var currImage = 1;
var closerCont = document.querySelector(".closer");
var buttons = document.querySelectorAll(".arrow");
var httpRequest;

/*functions*/
function initRequest(){
	mainImgCont.classList.remove('hide');
  httpRequest = new XMLHttpRequest();
	if(!httpRequest){
		console.log('Please switch to a newer browser.');
		return false;
	}
	return httpRequest;
	changeRequest();
};

function thumbChange(){
	currImage = this.id.slice(6);
	//console.log(currImage);
changeRequest();
}

function changeRequest(){
	httpRequest.onreadystatechange = imagechanger;
	httpRequest.open('GET', 'includes/galleryImages.php' + "?gallery=" + currImage);
	httpRequest.send();
}

function imagechanger(){
if (httpRequest.readyState === XMLHttpRequest.DONE && httpRequest.status === 200)
	var galData = JSON.parse(httpRequest.responseText);
		imgDescription.firstChild.nodeValue = galData.img_desc; //notsure why this errors, cant seem to read from galData properally, however this still works
		//Cannot read property 'img_desc' of undefined, seems to be related to "return httpRequest" but I could not figure it out
		mainImg.src = 'images/gallery/' + galData.img_src;
};

function imgNext(){
if(this.id == "next"){
	currImage++;
} else if(this.id == "prev"){
	currImage--;
}
var galImgLen = galleryImg.length;
if (currImage < 0){
	mainImgCont.classList.toggle('hide');
} else if (currImage >= galImgLen+1) {
	mainImgCont.classList.toggle('hide');
}
changeRequest();
}

function galClose(){
			mainImgCont.classList.toggle('hide');
}


[].forEach.call(buttons, function(nextImg){
nextImg.addEventListener('click', imgNext, true);
});
[].forEach.call(galleryImgScreens, function(e){
	e.addEventListener('click', thumbChange, false);
});
[].forEach.call(galleryImg, function(el){
	el.addEventListener('click', initRequest, false);
});

closerCont.addEventListener('click', galClose, false);

})();
