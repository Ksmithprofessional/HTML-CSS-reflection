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
