function validate() {
      if( document.registrationForm.username.value == "" ) {
         alert( "Please provide your name!" );
         document.registrationForm.username.focus() ;
         return false;
      }

      if( document.registrationForm.email.value == "" ) {
         alert( "Please provide your email!" );
         document.registrationForm.email.focus() ;
         return false;
      }

      var password=document.registrationForm.password.value;
      if(password.length<6 || password.length>20){
         alert("Password must be between 6 to 20 character");
         document.registrationForm.email.focus();
         return false;
      }
      document.registrationForm.submit();
      return( true );
   
}