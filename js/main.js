const loginButton = document.querySelector("#loginbutton");
const divlogin = document.querySelector("#divlogin");
const divform = document.querySelector("#divform");
const loginsubmit = document.querySelector("#loginsubmit");
const input = document.querySelectorAll("#form input")

loginButton.addEventListener("click", (event) => {
    event.preventDefault();

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

    for (let i = 0; i < input.length; i++) {
        if (!input[i].value.length) {
            input[i].style.borderBottom = "2px solid red"
        }
    }
});

