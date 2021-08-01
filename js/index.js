botonColapsable=document.getElementById("botonColapsable");

addEventListener("click",function(){
    var aria=botonColapsable.getAttribute("aria-expanded");
    if (aria=="true") {
        console.log("Esta Abierto");
        botonColapsable.innerHTML="Ver Menos";
    } else {
        console.log("Esta Colapsado")
        botonColapsable.innerHTML="Ver Más";
    }
})