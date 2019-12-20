/* SCAN */

//Key to use the package
ScanditSDK.configure('ATBtxQ5uECNnDmdj1wEqdE0bfXc2EEaV52TknMZaeoIGAWymFwq6C85LJHJcTbfiQFrPMANudVqaXfo4Al0Gsd17UpHjXG7SuXti94lCw9JyBp0IRwaKIpAcsKN8CXxQ9Czzp3jFlXri9K0xn8vnV9Va1TTgSC5R83Iw99e2APo/mardlDrFcWnVYukAvHCVx1vG3N3skoWO6yVeZlietLzHj76aBUeSLxmK9aKV35xU27v63BVvZ4kzTY0HFAQvDRyJHK91eQvFoaL9NMWYl5nRaGrDL/jwBwp9T86S3tajCyWE6u2R4gFh+5WuSORTgEYUw6QK5fBKm9ZaTGIPsWQgRv9U66A0aTUUiPe3C7PJkKOT1Lu+a0s6+TKRZllPqd9izYOkqwf4pIAwLhnCF457q+VQqHqoCldV8kubl3R68DvImUxs2BIwbuqW1pBZn36KqIRtcbF6qst0wnQykbIlZn755qVlYwjbZNEg8Pswn3KlZZFxvS/kPjZ1ypiJ9Kn+cHj7hkxs66LuqGfktygOIAuN5bbPm4F6rwPkAxzXl5EYAllPtyPgPc+L8RZW6x42J+I6p4PWvNPncnGAKsKys4OjzSHFabtpWNYr7xllfGttnmS4x1kDaYg9okzmPJwnD+/e3TGIOtPlVEnrUtxOKmRyZ+pnReiaJcSUPbjJnhpeNOjfMqgx8wBnoypemI/CZF3aBhi97tC1QlzZcQHx48ItC7GXTdijHpYhLCPy7Bf6hguVtgpz65pU1Z+a+qe/hEvofLAfCTjMe1xD8TIHi9CXNE8SMrnR6MCugvh/vw==',{
    engineLocation: 'https://cdn.jsdelivr.net/npm/scandit-sdk/build'
});
//Set Div scanner
ScanditSDK.BarcodePicker.create(document.getElementById('scandit-barcode-picker'), {
    //Set sound
    playSoundOnScan: false,
    //Set Vibration
    vibrateOnScan: true
}).then(function(barcodePicker) {
    var scanSettings = new ScanditSDK.ScanSettings({
        //Can only scan DataMatrix
        enabledSymbologies: ['data-matrix'],
        codeDuplicateFilter: 1000
    });
    barcodePicker.applyScanSettings(scanSettings);
    barcodePicker.on('scan', function(scanResult) {
        //Get code DataMatrix
        let code = (scanResult.barcodes.reduce(function(string, barcode) {
            return string + barcode.data;
        }, ''));
        //Get the CIP code in the code DataMatrix
        code = code.substr(3, 13);
        //Redirect on the correct medicine page 
        document.location = `medicament/${code}`;
    });
});