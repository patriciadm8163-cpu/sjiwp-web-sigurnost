document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    if (!form) return;

    const ime = document.getElementById("ime");
    const email = document.getElementById("email");
    const poruka = document.getElementById("poruka");
    const imeError = document.getElementById("imeError");
    const emailError = document.getElementById("emailError");
    const porukaError = document.getElementById("porukaError");
    const success = document.getElementById("formSuccess");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        imeError.textContent = "";
        emailError.textContent = "";
        porukaError.textContent = "";
        success.textContent = "";

        let isValid = true;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (ime.value.trim() === "") {
            imeError.textContent = "Ime i prezime su obavezni.";
            isValid = false;
        }

        if (email.value.trim() === "") {
            emailError.textContent = "E-mail je obavezan.";
            isValid = false;
        } else if (!emailPattern.test(email.value.trim())) {
            emailError.textContent = "Unesite ispravan format e-mail adrese.";
            isValid = false;
        }

        if (poruka.value.trim() === "") {
            porukaError.textContent = "Poruka je obavezna.";
            isValid = false;
        }

        if (isValid) {
            success.textContent = "Poruka je uspješno poslana! Hvala na upitu.";
            form.reset();
        }
    });
});