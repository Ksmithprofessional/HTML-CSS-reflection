const form = document.getElementById('query-form');

form.addEventListener('submit', (e) => {

    
   let enquiryName = document.querySelector('input[id="your-name"]').value;
   let enquiryEmail = document.querySelector('input[id="your-email"]').value;
   let enquiryPhone = document.querySelector('input[id="your-phone"]').value;
   let enquirySubject = document.querySelector('input[id="subject"]').value;
   let enquiryMessage = document.querySelector('textarea[id="message"]').value;
   const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   const ukPhoneRegex = /^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/;

   if(enquiryName === "") {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `Please enter a name`;
      
   }

   if(!enquiryEmail.match(regex)) {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `Invalid email address`;
      // console.log(email);
      // test to see whether the email address actually shows up on failure

   } if(enquiryEmail === '') {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `We can't email you if you don't put in an email address!`;

   };

   if(!enquiryPhone.match(ukPhoneRegex)) {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `Invalid uk phone number`;

   } if(enquiryPhone === '') {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `A phone number is required`;

   };

   if(enquirySubject === "") {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `Please enter a subject`;
      
   }

   if(enquiryMessage === "") {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `Please enter a message`;
      
   }

});

//contact page drop down

const dropDown = document.querySelector('.drop-down');
const dropDownInfo = document.querySelector('.drop-down-info');

dropDown.addEventListener('click', () => {

   if (dropDownInfo.style.height == '0px') {

      if (window.innerWidth >= 1260) {

         dropDownInfo.style.height = '410px';
      } else {

      dropDownInfo.style.height = '330px';
      }
      } else {

         dropDownInfo.style.height = '0px';
      }

});