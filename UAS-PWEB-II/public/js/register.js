
function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


document.addEventListener("DOMContentLoaded", function() {
    let eyeicon_password = document.getElementById("eyeicon_password");
    let password = document.getElementById("password");

    eyeicon_password.onclick = function() {
        if (password.type === "password") {
            password.type = "text";
            eyeicon_password.src = eyeicon_password.getAttribute("data-open");
        } else {
            password.type = "password";
            eyeicon_password.src = eyeicon_password.getAttribute("data-close");
        }
    };

    let eyeicon_konfirmasi_password = document.getElementById("eyeicon_konfirmasi_password");
    let konfirmasi_password = document.getElementById("konfirmasi_password");

    eyeicon_konfirmasi_password.onclick = function() {
        if (konfirmasi_password.type === "password") {
            konfirmasi_password.type = "text";
            eyeicon_konfirmasi_password.src = eyeicon_konfirmasi_password.getAttribute("data-open");
        } else {
            konfirmasi_password.type = "password";
            eyeicon_konfirmasi_password.src = eyeicon_konfirmasi_password.getAttribute("data-close");
        }
    };
});

