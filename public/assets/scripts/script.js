const buttonMenu = document.querySelector('.button-menu')
const menuMobile = document.querySelector('.navigation')
let menuStatus = true

buttonMenu.addEventListener('click', () =>{
    if(menuStatus === false){
        menuMobile.classList.add('is-appear')
        document.body.classList.remove('overflow')
        menuStatus = true
    }
    else if(menuStatus === true){
        menuMobile.classList.remove('is-appear')
        menuStatus = false
        document.body.classList.add('overflow')
    }
})