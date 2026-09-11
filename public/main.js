var role = localStorage.getItem("role");
if (!role) {
    role = "user";
}

var welcomeTitle = document.getElementById("welcomeTitle");
if (welcomeTitle && role === "admin") {
    welcomeTitle.innerHTML = "Admin - Welcome to AlHayat Hospital,";
}

var loginForm = document.getElementById("loginForm");
if (loginForm) {
    loginForm.onsubmit = function (e) {
        e.preventDefault();

        var email = document.getElementById("regEmail").value;
        var pass = document.getElementById("pass").value;

        var emailPat = /^\w+@\w+\.(com|edu|eg|org)$/;

        if (!emailPat.test(email)) {
            alert("Invalid email address");
            return false;
        }
        if (pass.length < 4) {
            alert("Password must be at least 4 characters");
            return false;
        }

        if (email.toLowerCase() === "admin@hospital.com") {
            localStorage.setItem("role", "admin");
        } else {
            localStorage.setItem("role", "user");
        }
        localStorage.setItem("email", email);

        //window.location.href = "dashboard.html";
    };
}

var registerForm = document.getElementById("registerForm");
if (registerForm) {
    registerForm.onsubmit = function (e) {
        e.preventDefault();

        var u = document.getElementById("regUser").value;
        var ph = document.getElementById("regPhone").value;
        var em = document.getElementById("regEmail").value;
        var p1 = document.getElementById("regPass").value;
        var p2 = document.getElementById("regConfirm").value;

        var namePat = /^[a-zA-Z]{3,10}$/;
        var phonePat = /^(010|011|012|015)\d{8}$/;
        var emailPat = /^\w+@\w+\.(com|org|edu|eg)$/;

        if (!namePat.test(u)) {
            alert("Username: 3 to 10 letters only");
            return false;
        }
        if (!phonePat.test(ph)) {
            alert("Phone must be 11 digits and started with (010|011|012|015)");
            return false;
        }
        if (!emailPat.test(em)) {
            alert("Invalid email address");
            return false;
        }
        if (p1.length < 4) {
            alert("Password must be at least 4 characters");
            return false;
        }
        if (p1 !== p2) {
            alert("Passwords do not match");
            return false;
        }

        alert("Registered successfully! Please login.");
        window.location.href = "index.html";
    };
}

var medSearch = document.getElementById("medSearch");
if (medSearch) {
    medSearch.onkeyup = function () {
        var q = this.value.toLowerCase();
        var items = document.getElementsByClassName("item");
        for (var i = 0; i < items.length; i++) {
            var txt = items[i].innerHTML.toLowerCase();
            if (txt.indexOf(q) > -1) {
                items[i].style.display = "block";
            } else {
                items[i].style.display = "none";
            }
        }
    };
}