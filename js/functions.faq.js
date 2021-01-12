var parent = document.querySelector(".modal-parent"),
    btn = document.querySelector("button1"),
    X = document.querySelector(".X"),
    section = document.querySelector(".section1")

btn.addEventListener("click", appear);

function appear() {
    parent.style.display = "block"
    section.style.filter = "blur(10px)"
}
X.addEventListener("click", disappearx);

function disappearx(){
    parent.style.display = "none"
    section.style.filter = "none"

}

parent.addEventListener("click", disappearParent);

function disappearParent(e){
    if (e.target.className == "modal-parent"){
        parent.style.display = "none"
        section.style.filter = "none"
    }
}