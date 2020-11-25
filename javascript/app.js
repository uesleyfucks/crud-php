//Mudar formulario Login/Cadastro
const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener('click', () => {
    container.classList.add("sign-up-mode");
});
sign_in_btn.addEventListener('click', () => {
    container.classList.remove("sign-up-mode");
});

//
function myFunction(that) {
    if (that.value == "Monstro") {
    document.getElementById("atk").style.display = "grid";
    document.getElementById("def").style.display = "grid";
    } else {
        document.getElementById("atk").style.display = "none";
        document.getElementById("def").style.display = "none";
    }
}
