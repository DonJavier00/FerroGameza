const fila = document.querySelector('.slide');
const contenido = document.querySelectorAll('.clase');

const flechaArriba = document.getElementById('up');
const flechaAbajo = document.getElementById('down');

// ? ----- ----- Event Listener para la flecha derecha. ----- -----
flechaArriba.addEventListener('click', () => {
	fila.scrollTop -=500;
	

});

// ? ----- ----- Event Listener para la flecha izquierda. ----- -----
flechaAbajo.addEventListener('click', () => {
	fila.scrollTop += 500;


});