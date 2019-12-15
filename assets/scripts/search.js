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

/* SCAN */

function continueScanning() {
    if (picker) {
        continueButton.disabled = true;

        // Resume scanning
        picker.resumeScanning();
    }
}

// Configure the library and activate it with a license key
const licenseKey = "AUv9cwlrF8aiK9JcMj7/434ZHod3L9eccXAUxyphmdDdAR0xpUbIavVcfEgSUQx/4WMWtwk9+FHDYS7BmGI0yB1rYjPNU0AVZ1K8qSh1goxzFsyK42o+5BU/dYawPkBB7yRvR2Wnh8nLAUmPMbeqHczjv1ht8FFBURKfPBMBHwY7eXiwpzo5pftdpi+uO+o4HbrZB9MZ6u6X4Ff8SFLG8Kvx60lyNF6fkXwfBqkqSHJ73JBLD1XYCBvRtyg90GodsClAW5hLB1XHEjJmbxyAFl1Il5/x2peTUemwBMqVJShHqrAf6nQgI6sy5b7Ce9fLIMb1DAK+NgsTpVfbFppKmFWY5ZjWMnO2km+JiYcWkpld/c1vUq3JDycSuX72VlV/XFWTi8Vmz4w2afkxMQvCw92vZeP4DKlC1qsh7soGCAFWldTjW0H52REnsnS/NtjJnjX59K0NszzuRiaJEJnubrzRx2VJaSTEYiJ4FbtXRlCQLaxPhZcPjFhHr4AizBLEBo4kLwr1YUi7IoX/C8sGZi/6mIErpsO780HT706dcHbBaLmDk9fExqbob8OGvgj93T751MmO6+YvA1R6xS8L2A6phabos3zZUyqXTIX0n/ojF/NauFknG1+nvQayDUWkWKkxI4ZkrsclBomiv/456cKwysw6WRVbkzKFuHMBoYyCUYau5YVhiiMgCqBtIs2MO5j2lEQKGiGMrOHon9GPltBDQp4zB7I1H8jpeEdo9uzMqZS+d5r8Abjw8EcHfuGgL7wc4L+uj0H4lhzSRFc4TC7Ba2vQMOSSUgVEe1eUBVaS3Q==";

// Configure the engine location, as explained on http://docs.scandit.com/stable/web/index.html
// const engineLocation = "build"; // the folder containing the engine
// or, if using a CDN:
const engineLocation = "https://cdn.jsdelivr.net/npm/scandit-sdk@4.x/build"

ScanditSDK.configure(licenseKey, { engineLocation: engineLocation });

const scannerContainer = document.getElementById("scandit-barcode-picker");
const resultContainer = document.getElementById("scandit-barcode-result");
const continueButton = document.getElementById("continue-scanning-button");
continueButton.disabled = true;
continueButton.hidden = true;
let picker;

// Create & start the picker
ScanditSDK.BarcodePicker.create(scannerContainer, {
        playSoundOnScan: true,
        vibrateOnScan: true
    })
    .then(barcodePicker => {
        picker = barcodePicker;
        // Create the settings object to be applied to the scanner
        const scanSettings = new ScanditSDK.ScanSettings({
            enabledSymbologies: ["ean8", "ean13", "upca", "upce", "code128", "code39", "code93",
                "itf"
            ],
            codeDuplicateFilter: 1000
        });
        picker.applyScanSettings(scanSettings);

        // If a barcode is scanned, show it to the user and pause scanning
        // (scanning is resumed when the user clicks "Continue Scanning")
        picker.on("scan", scanResult => {
            continueButton.hidden = false;
            continueButton.disabled = false;
            picker.pauseScanning();
            resultContainer.innerHTML = scanResult.barcodes.reduce((string, barcode) =>
                string +
                `${ScanditSDK.Barcode.Symbology.toHumanizedName(barcode.symbology)}: ${barcode.data}<br>`,
                '');
        });
        picker.on("scanError", error => {
            console.error(error.message);
        });
        picker.resumeScanning();
    })
    .catch(error => {
        alert(error);
    });