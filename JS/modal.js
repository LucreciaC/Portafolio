// Obtener el modal
var modal = document.getElementById("project1-modal");

// Obtener la imagen que abre el modal
var img = document.getElementById("project1-img");

// Obtener el elemento <span> que cierra el modal
var span = document.getElementsByClassName("close")[0];

// Cuando el usuario hace clic en la imagen, abrir el modal 
img.onclick = function() {
    modal.style.display = "block";
}

// Cuando el usuario hace clic en <span> (x), cerrar el modal
span.onclick = function() {
    modal.style.display = "none";
}

// Cuando el usuario hace clic fuera del modal, cerrarlo
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}