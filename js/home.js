function copyPhone() {
    var copyText = document.getElementById("copyText"); // get text to be copied
    copyText.select();

    document.execCommand("copy"); // copy text
    
    // notify user
    alert("Toegevoegd aan klembord: " + copyText.value); 
}

function copyPhoneEN() {
    var copyText = document.getElementById("copyText"); // get text to be copied
    copyText.select();

    document.execCommand("copy"); // copy text
    
    // notify user
    alert("Copied to clipboard: " + copyText.value); 
}