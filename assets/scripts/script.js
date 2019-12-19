const buttonMenu = document.querySelector('.button-menu')
const menuMobile = document.querySelector('.navigation')
const scrollMenu = document.querySelector('.scroll-menu')
const main = document.querySelector('main')

//Set state Menu
let menuStatus = true

//Hide or display the menu
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

//Hide or display the menu
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

//Hide menu by scrolling
window.addEventListener('scroll', () =>{
    if(menuStatus === false){
        menuMobile.classList.add('disappear')
        menuStatus = true
    }
})