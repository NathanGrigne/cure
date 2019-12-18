document.querySelector(".send-form").addEventListener("click", function(){
    document.querySelector(".contact-form-js").style.display = "none";
    document.querySelector(".contact-check-js").style.display = "flex";
    function ThanksMessageAppear() {
      document.querySelector(".contact-check-js").style.display = "none";
      document.querySelector(".contact-thanksmessage-js").style.display = "flex";
    }setTimeout(ThanksMessageAppear, 1500);
});
  