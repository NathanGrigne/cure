const titleMedic = document.querySelectorAll('.infoMedic h2')
const containerTextInfoMedic = document.querySelectorAll('.containerTextInfoMedic')

for(let i = 0; i<titleMedic.length;i++) {
  titleMedic[i].addEventListener(
      'click',
      function () {
          if(containerTextInfoMedic[i].classList.contains('active'))
              containerTextInfoMedic[i].classList.remove('active')
          else{
              if (document.querySelectorAll('.active').length > 0){
                  document.querySelector('.active').classList.remove('active')
              }
              containerTextInfoMedic[i].classList.add('active')
          }
      }
  )
}