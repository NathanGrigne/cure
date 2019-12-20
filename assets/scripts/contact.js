//Set event on the form button
document.querySelector('.send-form').addEventListener('click', function(){
    document.querySelector('.contact-form-js').style.display = 'none';
    document.querySelector('.contact-check-js').style.display = 'flex';
    //Set function, appear after 1.5s
    function ThanksMessageAppear() {
      document.querySelector('.contact-check-js').style.display = 'none';
      document.querySelector('.contact-thanksmessage-js').style.display = 'flex';
    }setTimeout(ThanksMessageAppear, 1500);
});
  