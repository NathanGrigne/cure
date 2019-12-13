const containerTextMentions = document.querySelectorAll(".mentions h2");

function togglementions(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}

containerTextMentions.forEach(containerTextMentions => containerTextMentions.addEventListener('click', togglementions));