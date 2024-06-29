

document.addEventListener("DOMContentLoaded", function() {
    let eyeicon = document.getElementById("eyeicon");
    let password = document.getElementById("password");
    let openEyeUrl = eyeicon.getAttribute("data-open");
    let closeEyeUrl = eyeicon.getAttribute("data-close");

    eyeicon.onclick = function() {
        if (password.type === "password") {
            password.type = "text";
            eyeicon.src = openEyeUrl;
        } else {
            password.type = "password";
            eyeicon.src = closeEyeUrl;
        }
    };
});







