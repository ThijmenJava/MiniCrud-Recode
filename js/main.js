const loginButton = document.querySelector("#loginbutton");
const divlogin = document.querySelector("#divlogin");
const divform = document.querySelector("#divform");
const loginsubmit = document.querySelector("#loginsubmit");
const input = document.querySelectorAll("#form input")
const form = document.querySelector("#form");

loginButton.addEventListener("click", (event) => {

    divlogin.style.display = "flex";
    divform.style.display = "flex";
});

window.onclick = (event) => {
    if (event.target === divlogin) {
        divlogin.style.display = "none";
        divform.style.display = "none";
        for (let i = 0; i < input.length; i++) {
            if (!input[i].value.length) {
                input[i].style.borderBottom = "2px solid black"
            }
        }
    }
}

loginsubmit.addEventListener("click",(event) => {
    event.preventDefault();

    let errors = false;

    for (let i = 0; i < input.length; i++) {
        if (!input[i].value.length) {
            errors = true;
            input[i].style.borderBottom = "2px solid red"
        }
    }

    if (!errors) {
        form.submit();
    }
});

