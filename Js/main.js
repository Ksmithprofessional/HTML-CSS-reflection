const header = document.querySelector('header');
let scrollPosition = 0;


document.addEventListener('scroll', () => { 
   let scroll = window.scrollY 
   // scrollY stores the scroll position as a number
   if (scroll < scrollPosition){
      // upscroll
      header.classList.add('sticky');
      header.classList.remove('no-stick');
   } if (scroll > scrollPosition) {
      // downscroll
      header.classList.remove('sticky');
      header.classList.add('no-stick');
   }
   scrollPosition = scroll <= 0 ? 0 : scroll; 
});

// image slideshow all images in one picture moving along changing left/right positioning
$(document).ready(function(){ $('.image-slideshow').slick({ 
   dots: true, 
   autoplay: true, 
   autoplaySpeed: 5000,
   infinite: true, 
   slidesToShow: 1, 
   slidesToScroll: 1,
   speed: 500
}); });

//cookie pop up
const popUp = document.querySelector('.cookie-pop-up')
const cookie = document.querySelector('.cookies')
const changeSettings = document.querySelector('.cookie-settings')
const accept = document.querySelector('.accept')
const settings = document.querySelector('.settings')
const body = document.querySelector('body')
const cancel = document.querySelector('.cancel')
const cont = document.querySelector('.continue')


window.addEventListener ('load', ()=> {

   if (document.cookie !== "status=accepted") {
      popUp.showModal();
      cookie.style.display = 'block';
      body.style.overflowY = 'hidden';
   }
});

function close() {

  popUp.close();
}

accept.addEventListener('click', () => {

   close();
   document.cookie = "status=accepted; max-age=60; Secure";
   body.style.overflowY = 'auto';
});

settings.addEventListener('click', () => {

   close();
   changeSettings.style.display = 'block';
});

cancel.addEventListener('click', () => {

   changeSettings.style.display = 'none';
   popUp.showModal();
   cookie.style.display = 'block';
   body.style.overflowY = 'hidden';
});

cont.addEventListener('click', () => {

   changeSettings.style.display = 'none';
   document.cookie = "status=accepted; max-age=60; Secure";
   body.style.overflowY = 'auto';
});
