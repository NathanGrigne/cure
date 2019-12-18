const buttonMenu = document.querySelector('.button-menu')
const menuMobile = document.querySelector('.navigation')
const scrollMenu = document.querySelector('.scroll-menu')
const main = document.querySelector('main')

let menuStatus = true

buttonMenu.addEventListener('click', () =>{
    if(menuStatus === false){
        menuMobile.classList.add('disappear')
        menuStatus = true
    }
    else if(menuStatus === true){
        menuMobile.classList.remove('disappear')
        menuStatus = false
    }
})

scrollMenu.addEventListener('click', () =>{
    if(menuStatus === false){
        menuMobile.classList.add('disappear')
        menuStatus = true
    }
    else if(menuStatus === true){
        menuMobile.classList.remove('disappear')
        menuStatus = false
    }
})

window.addEventListener('scroll', () =>{
    if(menuStatus === false){
        menuMobile.classList.add('disappear')
        menuStatus = true
    }
})