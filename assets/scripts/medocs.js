const containerTextInfoMedic = document.querySelectorAll(".infoMedic h2");

function toggleInfoMedic(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}

containerTextInfoMedic.forEach(containerTextInfoMedic => containerTextInfoMedic.addEventListener('click', toggleInfoMedic));