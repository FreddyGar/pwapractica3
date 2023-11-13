// script.js
function agregarAlCarrito(idProducto) {

    var boton = document.querySelector('button[data-id="' + idProducto + '"]');
    if (boton) {
        boton.textContent = 'Agregado al carrito';
        boton.disabled = true; 
    }
    alert('Producto agregado al carrito: ' + idProducto);
}
