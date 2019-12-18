const titleMentions = document.querySelectorAll('.mentions h2')
const containerTextMentions = document.querySelectorAll('.containerTextMentions')

for(let i = 0; i<titleMentions.length;i++) {
  titleMentions[i].addEventListener(
      'click',
      function () {
          if(containerTextMentions[i].classList.contains('active'))
              containerTextMentions[i].classList.remove('active')
          else{
              if (document.querySelectorAll('.active').length > 0){
                  document.querySelector('.active').classList.remove('active')
              }
              containerTextMentions[i].classList.add('active')
          }
      }
  )
}