// script.js
function agregarAlCarrito(idProducto) {
    // Aquí puedes agregar la lógica para agregar el producto al carrito usando JavaScript.

    // Por ejemplo, podrías cambiar el texto del botón a "Agregado al carrito".
    var boton = document.querySelector('button[data-id="' + idProducto + '"]');
    if (boton) {
        boton.textContent = 'Agregado al carrito';
        boton.disabled = true; // Deshabilita el botón después de agregar al carrito
    }

    // Puedes realizar otras acciones, como enviar datos al servidor, actualizar el carrito, etc.
    alert('Producto agregado al carrito: ' + idProducto);
}
