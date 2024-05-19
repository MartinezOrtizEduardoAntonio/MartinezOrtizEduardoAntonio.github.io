function activate_start(inputName,numberStart){
	//obtenermos las preguntas que vamos a modificar
	var nameSelectorStar='.rating-'+inputName+' .star'
	var nameSelectorValue='.rating-'+inputName+' input'
	const allStar = document.querySelectorAll(nameSelectorStar)
	const labelInput = document.querySelector(nameSelectorValue)

	var initialStar=0;
	var finishStar=numberStart;

	//esto es para desactivar todas las estrellas de la pregunta para despues solo activar el nuevo numero selecionadas
	for(let i=0; i<=4; i++) {
		allStar[i].classList.replace('bxs-star', 'bx-star')
		allStar[i].classList.remove('active')
	}

	//esto es para activar el numero de estrellas selecionadas
	for(let i=initialStar; i<=finishStar; i++) {
		allStar[i].classList.replace('bx-star', 'bxs-star')
		allStar[i].classList.add('active')
	}

	//actualizamos el valor del input 
	labelInput.value=finishStar;
}