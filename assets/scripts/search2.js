/* SCAN */
ScanditSDK.configure("AUld4glrFxQDBTOWTg8Tv0ApoDD8QfwzNlhDAX5E/cIeTR629VoIE75yt4ugevHc0EmpUtZGfV/0VeU+d1xS5o59PRS9RNCL5Fk/QuEtm2bnJGjorCExPhclZ/oUEUR7x0R5b+ITkb+z2DMmiD+eF3BIIQNm3Hs5ralyr5TwGHLTmF+jO9YXOcqwN3xltz21+O1U2ER9tLq49GEwzx1ptFy0Ccknxz6SL39cM7lfKUMog6T8Tl4840XQvfGJ64aMdYsrgFiUe6OUOraCZ5Dz0MqZSCWSWpijtIg6vqGEcGxWOUGE0eUkR4vIBjT8IGibdEty8prHrWNUmm1WrljISvUslc543ZwGsoN+4BOlgFEw55yUb9zCz2Gu9MjY8sQ1TdNOGeOJyWU6iBzx5/RL550sFBsD08acWqR4U1WerzcgqVXTz5itUKSYcVVWvxzDBN1gAxgGWXJH4utBl5mHh8eASn7tY3t+0nJneBArELlbSA1OzNloE9HiBtlzWu6H8U2AnYVXB92Ub/MZl18WeiInlZK6xBnReSbA9lMcIcVtv4k4kPvGbim8G2GGyr+kQix3dlQzjE+G4lEFvyXc5dMUyQz5rIUbtmy6KJ6pt6ATy98bbIFAk3tYlTgiIuVDh2pMHmlFfMAZ6pR42fT6CA4wWpmn+wtbJtad6Sy4Z9smZNAMy1h6KSdKUGBT0pZeOPd5n6MOw8f1tOjzrJiKSReObCFjIWztWnBt+aMkE0bha93MA2iU6unrgPES309GvXIBBTS/TaRNGxc9qYFedYFzHpxWN4jwMOKGYD80sgQp/w==",{
    //Remplace par ta clé web au dessus
    engineLocation: "https://cdn.jsdelivr.net/npm/scandit-sdk/build"
});
ScanditSDK.BarcodePicker.create(document.getElementById("scandit-barcode-picker"), {
    playSoundOnScan: true,
    vibrateOnScan: true
}).then(function(barcodePicker) {
    var scanSettings = new ScanditSDK.ScanSettings({
        enabledSymbologies: ["data-matrix"],
        codeDuplicateFilter: 1000
    });
    barcodePicker.applyScanSettings(scanSettings);
    barcodePicker.on("scan", function(scanResult) {
        alert(scanResult.barcodes.reduce(function(string, barcode) {
            return string + ScanditSDK.Barcode.Symbology.toHumanizedName(barcode.symbology) + ": " + barcode.data + "\n";
        }, ""));
    });
});