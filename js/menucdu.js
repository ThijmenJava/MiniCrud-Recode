const gerechtButton = document.querySelector("#gerechtbutton");
const divproduct = document.querySelector("#div_product_aanmaken");
const divfromproduct = document.querySelector("#divformproduct");

gerechtButton.addEventListener(("click"), (event) => {
    divproduct.style.display = "flex";
    divfromproduct.style.display = "flex";
});

window.onclick = (event) => {
    if (event.target === divproduct) {
        divproduct.style.display = "none";
        divfromproduct.style.display = "none";
    }
};