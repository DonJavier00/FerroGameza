const fila = document.querySelector('.contenedor-carousel');
const contenido = document.querySelectorAll('.contenido');

const flechaIzquierda = document.getElementById('flecha-izquierda');
const flechaDerecha = document.getElementById('flecha-derecha');

// ? ----- ----- Event Listener para la flecha derecha. ----- -----
flechaDerecha.addEventListener('click', () => {
	fila.scrollLeft += 320;

});

// ? ----- ----- Event Listener para la flecha izquierda. ----- -----
flechaIzquierda.addEventListener('click', () => {
	fila.scrollLeft -= 320;


});

// ? ----- ----- Hover ----- -----
contenido.forEach((contenido) => {
	contenido.addEventListener('mouseenter', (e) => {
		const elemento = e.currentTarget;
		setTimeout(() => {
			contenidores.forEach(contenido => contenido.classList.remove('hover'));
			elemento.classList.add('hover');
		}, 300);
	});
});

fila.addEventListener('mouseleave', () => {
	contenidores.forEach(contenido => contenido.classList.remove('hover'));
});


