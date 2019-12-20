const scanTop = document.querySelector('.infos-scan-top')
const scanBottom = document.querySelector('.infos-scan')

//Display help to find CIP code and DataMatrix
scanTop.addEventListener('click', () =>{
    infosMatrix.classList.remove('hide')
})
scanBottom.addEventListener('click', () =>{
    infosCip.classList.remove('hide')
})

const close = document.querySelector('.close')
const close2 = document.querySelector('.close2')
const infosCip = document.querySelector('.infos-cip')
const infosMatrix = document.querySelector('.infos-matrix')

//Hide help to find CIP code and DataMatrix
close.addEventListener('click', () =>{
    infosCip.classList.add('hide')
})

close2.addEventListener('click', () =>{
    infosMatrix.classList.add('hide')
})