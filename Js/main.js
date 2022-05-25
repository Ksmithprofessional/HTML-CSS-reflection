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

// image slideshow 
$(document).ready(function(){ $('.image-slideshow').slick({ 
   dots: true, 
   autoplay: true, 
   autoplaySpeed: 4000,
   infinite: true, 
   slidesToShow: 1, 
   slidesToScroll: 1,
   speed: 500
}); });

//cookie pop up
// gigantic mess, must be a better way to clean this up
// hopefully cookie.split etc works since the way i did it originally only worked when accepting one cookie
const popUp = document.querySelector('.cookie-pop-up')
const cookie = document.querySelector('.cookies')
const changeSettings = document.querySelector('.cookie-settings')
const accept = document.querySelector('.accept')
const settings = document.querySelector('.settings')
const body = document.querySelector('body')
const cancel = document.querySelector('.cancel')
const cont = document.querySelector('.continue')
const enable = document.getElementsByClassName('enable')
const disable = document.getElementsByClassName('disable')
const detail = document.querySelector('.show-detailed')
const detailTab = document.querySelector('.detailed-table')


window.addEventListener ('load', ()=> {

   if (!document.cookie.split('; ').find(row => row.startsWith('status=accepted'))) {
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
   document.cookie = "status=accepted; max-age=86400; Secure";
   body.style.overflowY = 'auto';
});

settings.addEventListener('click', () => {

   close();
   changeSettings.style.display = 'block';
   event.preventDefault();
   //cookie settings were working one day, and then randomly closing as soon as it
   // opened the next day. Prevent default seemed to fix it for some reason?


   cancel.addEventListener('click', () => {

      changeSettings.style.display = 'none';
      popUp.showModal();
      cookie.style.display = 'block';
      body.style.overflowY = 'hidden';
   });

   cont.addEventListener('click', () => {

      changeSettings.style.display = 'none';
      document.cookie = "status=accepted; max-age=86400; Secure";
      body.style.overflowY = 'auto';

      if (enable[0].classList.contains('selected')) {
         document.cookie = "functional=enable; max-age=86400; Secure"
      } if (enable[1].classList.contains('selected')) {
         document.cookie = "performance=enable; max-age=86400; Secure"
      } if (enable[2].classList.contains('selected')) {
         document.cookie = "leadForensics=enable; max-age=86400; Secure"
      } if (enable[4].classList.contains('selected')) {
         document.cookie = "hotjar=enable; max-age=86400; Secure"
      } if (enable[5].classList.contains('selected')) {
         document.cookie = "linkedin=enable; max-age=86400; Secure"
      } if (enable[6].classList.contains('selected')) {
         document.cookie = "facebook=enable; max-age=86400; Secure"
      } if (enable[7].classList.contains('selected')) {
         document.cookie = "google=enable; max-age=86400; Secure"
      }
   });

});

   detail.addEventListener('click', () => {

      if (detailTab.style.display == 'none') {

      detailTab.style.display = 'block';
      detail.textContent = 'Hide Detailed Preferences';
      } else {

         detailTab.style.display = 'none';
         detail.textContent = 'Show Detailed Preferences';
      }
   });

enable[0].addEventListener('click', () => {

   enable[0].classList.add('selected');
   disable[0].classList.remove('selected');
   enable[3].classList.add('selected');
   disable[3].classList.remove('selected');
   
});

disable[0].addEventListener('click', () => {

   disable[0].classList.add('selected');
   enable[0].classList.remove('selected');
   disable[3].classList.add('selected');
   enable[3].classList.remove('selected');
   
});

enable[3].addEventListener('click', () => {

   enable[0].classList.add('selected');
   disable[0].classList.remove('selected');
   enable[3].classList.add('selected');
   disable[3].classList.remove('selected');
   
});

disable[3].addEventListener('click', () => {

   disable[0].classList.add('selected');
   enable[0].classList.remove('selected');
   disable[3].classList.add('selected');
   enable[3].classList.remove('selected');
   
});

enable[1].addEventListener('click', () => {

   enable[1].classList.add('selected');
   disable[1].classList.remove('selected');
   enable[2].classList.add('selected');
   disable[2].classList.remove('selected');
   enable[4].classList.add('selected');
   disable[4].classList.remove('selected');
   enable[5].classList.add('selected');
   disable[5].classList.remove('selected');
   enable[6].classList.add('selected');
   disable[6].classList.remove('selected');
   enable[7].classList.add('selected');
   disable[7].classList.remove('selected');
   
});

disable[1].addEventListener('click', () => {

   disable[1].classList.add('selected');
   enable[1].classList.remove('selected');
   disable[2].classList.add('selected');
   enable[2].classList.remove('selected');
   disable[4].classList.add('selected');
   enable[4].classList.remove('selected');
   disable[5].classList.add('selected');
   enable[5].classList.remove('selected');
   disable[6].classList.add('selected');
   enable[6].classList.remove('selected');
   disable[7].classList.add('selected');
   enable[7].classList.remove('selected');
   
});

enable[2].addEventListener('click', () => {

   enable[2].classList.add('selected');
   disable[2].classList.remove('selected');

   if (enable[4].classList.contains('selected') && enable[5].classList.contains('selected') && enable[6].classList.contains('selected') && enable[7].classList.contains('selected')) {

      enable[1].classList.add('selected');
      disable[1].classList.remove('selected');
   };
   
});

disable[2].addEventListener('click', () => {

   disable[2].classList.add('selected');
   enable[2].classList.remove('selected');
   disable[1].classList.add('selected');
   enable[1].classList.remove('selected');
   
});

enable[4].addEventListener('click', () => {

   enable[4].classList.add('selected');
   disable[4].classList.remove('selected');

   if (enable[2].classList.contains('selected') && enable[5].classList.contains('selected') && enable[6].classList.contains('selected') && enable[7].classList.contains('selected')) {

      enable[1].classList.add('selected');
      disable[1].classList.remove('selected');
   };
   
});

disable[4].addEventListener('click', () => {

   disable[4].classList.add('selected');
   enable[4].classList.remove('selected');
   disable[1].classList.add('selected');
   enable[1].classList.remove('selected');
   
});

enable[5].addEventListener('click', () => {

   enable[5].classList.add('selected');
   disable[5].classList.remove('selected');

   if (enable[2].classList.contains('selected') && enable[4].classList.contains('selected') && enable[6].classList.contains('selected') && enable[7].classList.contains('selected')) {

      enable[1].classList.add('selected');
      disable[1].classList.remove('selected');
   };
   
});

disable[5].addEventListener('click', () => {

   disable[5].classList.add('selected');
   enable[5].classList.remove('selected');
   disable[1].classList.add('selected');
   enable[1].classList.remove('selected');
   
});

enable[6].addEventListener('click', () => {

   enable[6].classList.add('selected');
   disable[6].classList.remove('selected');

   if (enable[2].classList.contains('selected') && enable[4].classList.contains('selected') && enable[5].classList.contains('selected') && enable[7].classList.contains('selected')) {

      enable[1].classList.add('selected');
      disable[1].classList.remove('selected');
   };
   
});

disable[6].addEventListener('click', () => {

   disable[6].classList.add('selected');
   enable[6].classList.remove('selected');
   disable[1].classList.add('selected');
   enable[1].classList.remove('selected');
   
});

enable[7].addEventListener('click', () => {

   enable[7].classList.add('selected');
   disable[7].classList.remove('selected');

   if (enable[2].classList.contains('selected') && enable[4].classList.contains('selected') && enable[5].classList.contains('selected') && enable[6].classList.contains('selected')) {

      enable[1].classList.add('selected');
      disable[1].classList.remove('selected');
   };
   
});

disable[7].addEventListener('click', () => {

   disable[7].classList.add('selected');
   enable[7].classList.remove('selected');
   disable[1].classList.add('selected');
   enable[1].classList.remove('selected');
   
});


// pop out menu
// absolute mess of code purely because i made the header absolute positioned
// but only on small screens. Just a horrible workaround, but i think it works?

const menuButton = document.querySelector('.menu');
const menu = document.querySelector('.pop-out-menu');
const page = document.querySelector('.entire-page');
const dark = document.querySelector('.darken-page');
const menuSm = document.querySelector('.small-position');
const formSm = document.querySelector('.small-form');
const phoneSm = document.querySelector('.small-phone');
const menuSquare = document.querySelector('.menu');
const menuSqText = menuSquare.querySelector('p');
const menuTop = document.querySelector('.menu-icon');
const menuMid = document.querySelector('.menu-icon-2');
const menuBot = document.querySelector('.menu-icon-3');

menuButton.addEventListener('click', () => {

   menu.style.display = 'block';
   body.style.overflowY = 'hidden';
   dark.style.display = 'block';
   page.style.position = 'absolute';
   menuTop.style.marginTop = '12px';
   menuTop.style.marginBottom = '-8px';
   menuBot.style.marginTop = '-8px';
   menuSqText.style.marginTop = '17px';
  
   if(window.innerWidth <= 767) {
      menuSm.style.right = '305px';
      formSm.style.width = '97vw';
      phoneSm.style.right = '380px';
   };

   setTimeout( () =>{
      menuTop.style.transform = 'rotate(135deg)';
      menuMid.style.transform = 'rotate(135deg)';
      menuMid.style.display = 'none';
      menuBot.style.marginTop = '5px';
      menuBot.style.transform = 'rotate(225deg)';
   }, 200);
});

dark.addEventListener('click', () => {

   menu.style.display = 'none';
   body.style.overflowY = 'auto';
   dark.style.display = 'none';
   page.style.position = '';
   menuSm.style.right = '';
   formSm.style.width = '';
   phoneSm.style.right = '';
   menuTop.style.transform = '';
   menuMid.style.display = 'block';
   menuMid.style.transform = '';
   menuBot.style.transform = '';
   menuBot.style.marginTop = '-8px';
   menuSqText.style.marginTop = '5px';

   setTimeout( () =>{

      menuTop.style.marginTop = '5px';
      menuTop.style.marginBottom = '5px';
      menuBot.style.marginTop = '5px';
   }, 300);
});

window.addEventListener('resize', () => {

   if(menu.style.display == 'block') {

      if(window.innerWidth <= 767) {
         menuSm.style.right = '305px';
         formSm.style.width = '97vw';
         phoneSm.style.right = '380px';
      } else {

         menuSm.style.right = '';
         formSm.style.width = '';
         phoneSm.style.right = '';
      };
   };
});
