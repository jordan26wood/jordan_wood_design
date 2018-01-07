(function(){
 var ports = document.querySelectorAll('.imgHolder'),
 appliedClass;


ports.forEach(function(element, index){
element. addEventListener('click', lightboxOpen, false)
});

function lightboxOpen(currentIndex, currentObject) {
   //debugger;
   let lightbox = document.querySelector('.lightbox');
   lightbox.style.display = "block";

   //let lightbox = document.querySelector('.lightbox');
   let lightboxImg = lightbox.querySelector('img');
   let title = lightbox.querySelector('h2')
   let lightboxDesc = lightbox.querySelector('p');
   let lightboxClose = lightbox.querySelector('.close-lightbox');

   lightboxClose.addEventListener('click', closelightbox ,false);

   lightboxImg.src = "images/" + currentObject.images[currentIndex];
   lightboxDesc.innerHTML = currentObject.ImageDescription[currentIndex];

 }

function closelightbox(){
  let lightbox = document.querySelector('.lightbox');
		lightbox.style.display = "none";
		document.body.style.overflow = "visible";


 lightbox.style.display = "none";


}
})();
