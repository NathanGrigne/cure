const scanTop = document.querySelector('.infos-scan-top')
const scanBottom = document.querySelector('.infos-scan')

scanTop.addEventListener('click', () =>{
    infosCip.classList.remove('hide')
})

scanBottom.addEventListener('click', () =>{
    infosMatrix.classList.remove('hide')
})

const close = document.querySelector('.close')
const close2 = document.querySelector('.close2')
const infosCip = document.querySelector('.infos-cip')
const infosMatrix = document.querySelector('.infos-matrix')

close.addEventListener('click', () =>{
    infosCip.classList.add('hide')
})

close2.addEventListener('click', () =>{
    infosMatrix.classList.add('hide')
})