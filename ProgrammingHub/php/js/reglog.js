document.addEventListener("DOMContentLoaded", function () {
    var phoneInput = document.getElementById("phone");
    var phoneMask = new IMask(phoneInput, {
        mask: '+{7}(000)000-00-00',
        lazy: false,
        placeholderChar: '0'
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var password1Input = document.getElementById("password1");
    var password2Input = document.getElementById("password2");

    // Обработчик события ввода в поле password2
    password2Input.addEventListener("input", function () {
        if (password1Input.value !== password2Input.value) {
            password2Input.setCustomValidity("Passwords do not match");
        } else {
            password2Input.setCustomValidity("");
        }
    });