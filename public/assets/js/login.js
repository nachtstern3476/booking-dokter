document.addEventListener('DOMContentLoaded', function () {
    const title = document.querySelector(".title-text .login");
    const form = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const loginLink = document.querySelector("#login-link");
    const signupLink = document.querySelector("#signup-link");
    const loginRadio = document.getElementById('login');
    const signupRadio = document.getElementById('signup');

    loginBtn.onclick = (() => toggleSlide(form, title));
    signupBtn.onclick = (() => toggleSlide(form, title));
    loginLink.onclick = (() => {
        loginRadio.checked = true;
        signupRadio.checked = false;
        toggleSlide(form, title);
    });
    signupLink.onclick = (() => {
        loginRadio.checked = false;
        signupRadio.checked = true;
        toggleSlide(form, title);
    });
});

function toggleSlide(form, title) {
    if (form.style.marginLeft == '0%' || form.style.marginLeft == '') {
        form.style.marginLeft = "-50%";
        title.style.marginLeft = "-50%";
    } else {
        form.style.marginLeft = "0%";
        title.style.marginLeft = "0%";
    }
}