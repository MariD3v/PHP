function checkEmail() {
    var email = document.getElementById("email").value;
    var emailStatus = document.getElementById("email_status");

    if (email.length > 5) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../server/checkEmail.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                if (xhr.responseText.trim() === "existe") {
                    emailStatus.innerHTML = "<span style='color:red;'>Este email ya está registrado</span>";
                } else {
                    emailStatus.innerHTML = "<span style='color:green;'>Email disponible</span>";
                }
            }
        };

        xhr.send("email=" + encodeURIComponent(email));
    } else {
        emailStatus.innerHTML = "";
    }
}