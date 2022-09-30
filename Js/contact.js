const form = document.getElementById('query-form');

form.addEventListener('submit', (e) => {

    
   let enquiryName = document.querySelector('input[id="your-name"]').value;
   let enquiryNameField = document.querySelector('input[id="your-name"]');
   let enquiryEmail = document.querySelector('input[id="your-email"]').value;
   let enquiryEmailField = document.querySelector('input[id="your-email"]');
   let enquiryPhone = document.querySelector('input[id="your-phone"]').value;
   let enquiryPhoneField = document.querySelector('input[id="your-phone"]');
   let enquirySubject = document.querySelector('input[id="subject"]').value;
   let enquirySubjectField = document.querySelector('input[id="subject"]');
   let enquiryMessage = document.querySelector('textarea[id="message"]').value;
   let enquiryMessageField = document.querySelector('textarea[id="message"]');
   const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   const ukPhoneRegex = /^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/;

   if(enquiryName === "") {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `Please enter a name`;
      enquiryNameField.style.border = '1px solid red';
      
   } else {

      enquiryNameField.style.border = 'unset';
   };

   if(!enquiryEmail.match(regex)) {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `Invalid email address`;
      enquiryEmailField.style.border = '1px solid red';
      // console.log(email);
      // test to see whether the email address actually shows up on failure

   } if(enquiryEmail === '') {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `We can't email you if you don't put in an email address!`;
      enquiryEmailField.style.border = '1px solid red';
      
   } else {

      enquiryEmailField.style.border = 'unset';
   };

   if(!enquiryPhone.match(ukPhoneRegex)) {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `Invalid uk phone number`;
      enquiryPhoneField.style.border = '1px solid red';

   } if(enquiryPhone === '') {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `A phone number is required`;
      enquiryPhoneField.style.border = '1px solid red';
      
   } else {

      enquiryPhoneField.style.border = 'unset';
   };

   if(enquirySubject === "") {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `Please enter a subject`;
      enquirySubjectField.style.border = '1px solid red';
      
   } else {

      enquirySubjectField.style.border = 'unset';
   };

   if(enquiryMessage === "") {

      e.preventDefault();
      document.querySelector('.error-1').innerHTML = `Please enter a message`;
      enquiryMessageField.style.border = '1px solid red';
      
   } else {

      enquiryMessageField.style.border = 'unset';
   };

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