const containerInfoScan = document.querySelectorAll('.infoScan, .inputCip .infoScan')
const overInfoScan = document.querySelectorAll('.containerOverInfoScan')
const close = document.querySelectorAll('.close')

for (let i = 0; i < containerInfoScan.length; i++) {
    containerInfoScan[i].addEventListener('click', () => {
            overInfoScan[i].classList.toggle('is-appear')
    })
    close[i].addEventListener('click', () => {
        overInfoScan[i].classList.remove('is-appear')
    })
}