let button = document.getElementById("abrirForm");
let form = document.getElementById("form");

function desplegar(){
    if(form.style.display== "block"){
        form.style.display= "none";
    } else {
        form.style.display= "block";
    }
}

window.onload = function(){  
    button.addEventListener("click",desplegar) 
}