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
   window.scrollTo(0,0);

   //let lightbox = document.querySelector('.lightbox');
   let lightboxImg = lightbox.querySelector('img');
   let title = lightbox.querySelector('h2')
   let lightboxDesc = lightbox.querySelector('p');
   let lightboxClose = lightbox.querySelector('.close-lightbox');

   lightboxImg.src = "images/" + currentObject.images[currentIndex];
   lightboxDesc.innerHTML = currentObject.ImageDescription[currentIndex];

   lightboxClose.addEventListener('click', closelightbox ,false);
 }

function closelightbox(){
 let lightbox = document.querySelector('.lightbox');
 let lightboxImg = lightbox.querySelector('img');
 let title = lightbox.querySelector('h2')
 let lightboxDesc = lightbox.querySelector('p');
 let lightboxClose = lightbox.querySelector('.close-lightbox');


 lightbox.style.display = "none";


}
})();
