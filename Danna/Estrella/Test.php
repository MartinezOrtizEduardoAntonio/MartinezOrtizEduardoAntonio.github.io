<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CapacitaT</title>
	<link rel="icon" type="image/jpg" href="Logo.png"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="testestilos.css">
	<script src="TestJava.js"></script>
	<script src="TestPDF.js"></script>

	<!-- jsPDF library -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Pacifico&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imbue:opsz,wght@10..100,100..900&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Graduate&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Preahvihear&display=swap" rel="stylesheet">
</head>
<body>
	<div class="header">
        <h1>CapacitaT</h1>
        <h2>"Transformando conocimiento en éxito empresarial"</h2>
      </div>

    	<ul>
        	<li><a href="index.php">Inicio</a></li>
        	<li><a href="conocenos.php">Conócenos</a></li>
            <li><a href="cursos.php">Cursos</a></li>
            <li><a href="">Especialistas</a></li>
            <li><a href="login/login.php">Acceso</a></li>
			<li><a href="Blog.php">Blog</a></li>
            <li><a href="Test.php">Test</a></li>
            <li><a href="Ayuda.php">Ayuda</a></li>
        </ul>

		<div class="row">
            <div class="leftcolumn">
              	<div class="card">
                	<h3 align="center">Evaluación de los cursos de CapacitaT</h3>
                	<h6 align="center"><img src="imgs/Hacertest.jpg" width="350" height="250" alt="calificacion"></h6>
                	<p align="left">Aquí tienes una guía para responder al cuestionario basado en la experiencia en los cursos de CapacitaT:</p>
					
					<br><p align="left"><b>1 estrella:</b> Si experimentó dificultades considerables durante el curso, 
						percibió un contenido de baja calidad o tuvo una experiencia general muy insatisfactoria.</p>
					<p align="left"><b>2 estrellas:</b> Si el curso no cumplió completamente con las expectativas, si se 
						identificaron deficiencias en el contenido o en su presentación, o si la experiencia general 
						fue insatisfactoria pero no alcanzó un nivel crítico.</p>
					<p align="left"><b>3 estrellas:</b> Si el curso satisfizo los criterios básicos y proporcionó una experiencia general aceptable, aunque no excepcional.</p>
					<p align="left"><b>4 estrellas:</b> Si el curso superó las expectativas y brindó una experiencia generalmente positiva. Esto podría ser debido a un contenido interesante, bien presentado y beneficioso para sus objetivos de aprendizaje.</p>
					<p align="left"><b>5 estrellas:</b> Si el curso fue excepcional en todos los aspectos, superando ampliamente las expectativas y proporcionando una experiencia de aprendizaje sobresaliente.</p>
					
					<br><p align="left">Recuerde ser honesto y reflexivo en sus respuestas, ya que su 
						retroalimentación es crucial para mejorar la calidad de los cursos ofrecidos y para 
						guiar a otros usuarios en su proceso de toma de decisiones educativas.</p>
				</div>
			</div>
		</div>

		<br>

	<form action="EnviarFormulario.php" method="post">
		<div class="wrapper">
			<h5>Pregunta 1: ¿La información proporcionada en el curso te ayudó a comprender los riesgos de 
				seguridad en el lugar de trabajo?</h5>
				
				<br>
				
				<div class="rating rating-uno">
					<input type="number" name="uno" hidden value="0">
					<i class='bx bx-star star' style="--i: 0;" onclick="activate_start('uno',0)"></i>
					<i class='bx bx-star star' style="--i: 1;" onclick="activate_start('uno',1)"></i>
					<i class='bx bx-star star' style="--i: 2;" onclick="activate_start('uno',2)"></i>
					<i class='bx bx-star star' style="--i: 3;" onclick="activate_start('uno',3)"></i>
					<i class='bx bx-star star' style="--i: 4;" onclick="activate_start('uno',4)"></i>
				</div>
			</div>

		<br>

	<div class="wrapper">
		<h5>Pregunta 2: ¿Consideras que el curso te proporcionó herramientas efectivas para prevenir 
			accidentes y lesiones en el trabajo?</h5>

		<br>


			<div class="rating rating-dos">
				<input type="number" name="dos" hidden value="0">
				<i class='bx bx-star star' style="--i: 0;" onclick="activate_start('dos',0)"></i>
				<i class='bx bx-star star' style="--i: 1;" onclick="activate_start('dos',1)"></i>
				<i class='bx bx-star star' style="--i: 2;" onclick="activate_start('dos',2)"></i>
				<i class='bx bx-star star' style="--i: 3;" onclick="activate_start('dos',3)"></i>
				<i class='bx bx-star star' style="--i: 4;" onclick="activate_start('dos',4)"></i>
			</div>
		</div>

	<br>
    
	<div class="wrapper">
		<h5>Pregunta 3: ¿El curso te ofreció una comprensión clara de los procedimientos de 
			emergencia en el lugar de trabajo?</h5>

			<br>

			<div class="rating rating-tres">
				<input type="number" name="tres" hidden value="0">
				<i class='bx bx-star star' style="--i: 0;" onclick="activate_start('tres',0)"></i>
				<i class='bx bx-star star' style="--i: 1;" onclick="activate_start('tres',1)"></i>
				<i class='bx bx-star star' style="--i: 2;" onclick="activate_start('tres',2)"></i>
				<i class='bx bx-star star' style="--i: 3;" onclick="activate_start('tres',3)"></i>
				<i class='bx bx-star star' style="--i: 4;" onclick="activate_start('tres',4)"></i>
			</div>
		</div>

	<br>

	<div class="wrapper">
		<h5>Pregunta 4: ¿Sentiste que estabas preparado para responder de manera efectiva en situaciones de 
			emergencia después de completar el curso?</h5>
			
			<br>
			
			<div class="rating rating-cuatro">
				<input type="number" name="cuatro" hidden value="0">
				<i class='bx bx-star star' style="--i: 0;" onclick="activate_start('cuatro',0)"></i>
				<i class='bx bx-star star' style="--i: 1;" onclick="activate_start('cuatro',1)"></i>
				<i class='bx bx-star star' style="--i: 2;" onclick="activate_start('cuatro',2)"></i>
				<i class='bx bx-star star' style="--i: 3;" onclick="activate_start('cuatro',3)"></i>
				<i class='bx bx-star star' style="--i: 4;" onclick="activate_start('cuatro',4)"></i>
			</div>
		</div>

	<br>

	<div class="wrapper">
		<h5>Pregunta 5: ¿El curso te ayudó a comprender las normativas y regulaciones de seguridad 
			laboral relevantes?</h5>
		
		<br>
		
			<div class="rating rating-cinco">
				<input type="number" name="cinco" hidden value="0">
				<i class='bx bx-star star' style="--i: 0;" onclick="activate_start('cinco',0)"></i>
				<i class='bx bx-star star' style="--i: 1;" onclick="activate_start('cinco',1)"></i>
				<i class='bx bx-star star' style="--i: 2;" onclick="activate_start('cinco',2)"></i>
				<i class='bx bx-star star' style="--i: 3;" onclick="activate_start('cinco',3)"></i>
				<i class='bx bx-star star' style="--i: 4;" onclick="activate_start('cinco',4)"></i>
			</div>
		</div>

	<br>

	<div class="wrapper">
		<h5>Pregunta 6: ¿Sentiste que estabas mejor informado sobre tus derechos y responsabilidades 
			en materia de seguridad laboral después de completar el curso?</h5>
		
		<br>
		
			<div class="rating rating-seis">
				<input type="number" name="seis" hidden value="0">
				<i class='bx bx-star star' style="--i: 0;" onclick="activate_start('seis',0)"></i>
				<i class='bx bx-star star' style="--i: 1;" onclick="activate_start('seis',1)"></i>
				<i class='bx bx-star star' style="--i: 2;" onclick="activate_start('seis',2)"></i>
				<i class='bx bx-star star' style="--i: 3;" onclick="activate_start('seis',3)"></i>
				<i class='bx bx-star star' style="--i: 4;" onclick="activate_start('seis',4)"></i>
			</div>
		</div>

	<br>

	<div class="wrapper">
		<h5>Pregunta 7: ¿El curso te proporcionó información útil sobre cómo prevenir enfermedades 
			relacionadas con el trabajo?</h5>
		
		<br>
		
			<div class="rating rating-siete">
				<input type="number" name="siete" hidden value="0">
				<i class='bx bx-star star' style="--i: 0;" onclick="activate_start('siete',0)"></i>
				<i class='bx bx-star star' style="--i: 1;" onclick="activate_start('siete',1)"></i>
				<i class='bx bx-star star' style="--i: 2;" onclick="activate_start('siete',2)"></i>
				<i class='bx bx-star star' style="--i: 3;" onclick="activate_start('siete',3)"></i>
				<i class='bx bx-star star' style="--i: 4;" onclick="activate_start('siete',4)"></i>
			</div>
		</div>

	<br>

	<div class="wrapper">
		<h5>Pregunta 8: ¿Te sentiste más consciente de los riesgos para la salud en el trabajo 
			después de completar el curso?</h5>
		
		<br>
		
			<div class="rating rating-ocho">
				<input type="number" name="ocho" hidden value="0">
				<i class='bx bx-star star' style="--i: 0;" onclick="activate_start('ocho',0)"></i>
				<i class='bx bx-star star' style="--i: 1;" onclick="activate_start('ocho',1)"></i>
				<i class='bx bx-star star' style="--i: 2;" onclick="activate_start('ocho',2)"></i>
				<i class='bx bx-star star' style="--i: 3;" onclick="activate_start('ocho',3)"></i>
				<i class='bx bx-star star' style="--i: 4;" onclick="activate_start('ocho',4)"></i>
			</div>
		</div>

	<br>

	<div class="wrapper">
		<h5>Pregunta 9: ¿El curso promovió una cultura de seguridad en el lugar de trabajo?</h5>

		<br>
		
			<div class="rating rating-nueve">
				<input type="number" name="nueve" hidden value="0">
				<i class='bx bx-star star' style="--i: 0;" onclick="activate_start('nueve',0)"></i>
				<i class='bx bx-star star' style="--i: 1;" onclick="activate_start('nueve',1)"></i>
				<i class='bx bx-star star' style="--i: 2;" onclick="activate_start('nueve',2)"></i>
				<i class='bx bx-star star' style="--i: 3;" onclick="activate_start('nueve',3)"></i>
				<i class='bx bx-star star' style="--i: 4;" onclick="activate_start('nueve',4)"></i>
			</div>
		</div>

	<br>

	<div class="wrapper">
		<h5>Pregunta 10: ¿Sentiste que el curso te motivó a adoptar comportamientos más seguros 
			en tu entorno laboral?</h5>
		
		<br>
		
			<div class="rating rating-diez">
				<input type="number" name="diez" hidden value="0">
				<i class='bx bx-star star' style="--i: 0;" onclick="activate_start('diez',0)"></i>
				<i class='bx bx-star star' style="--i: 1;" onclick="activate_start('diez',1)"></i>
				<i class='bx bx-star star' style="--i: 2;" onclick="activate_start('diez',2)"></i>
				<i class='bx bx-star star' style="--i: 3;" onclick="activate_start('diez',3)"></i>
				<i class='bx bx-star star' style="--i: 4;" onclick="activate_start('diez',4)"></i>
			</div>
		</div>

		<br>

		<div class="wrapper">
			<h5>Pregunta 11: ¿El curso abordó adecuadamente la importancia de la salud mental en el trabajo?</h5>

		<br>
		
				<div class="rating rating-once">
					<input type="number" name="once" hidden value="0">
					<i class='bx bx-star star' style="--i: 0;" onclick="activate_start('once',0)"></i>
					<i class='bx bx-star star' style="--i: 1;" onclick="activate_start('once',1)"></i>
					<i class='bx bx-star star' style="--i: 2;" onclick="activate_start('once',2)"></i>
					<i class='bx bx-star star' style="--i: 3;" onclick="activate_start('once',3)"></i>
					<i class='bx bx-star star' style="--i: 4;" onclick="activate_start('once',4)"></i>
				</div>
			</div>
	
			<br>

			<div class="wrapper">
				<h5>Pregunta 12: ¿Consideras que el curso te proporcionó herramientas para gestionar el 
					estrés y promover el bienestar emocional en el trabajo?</h5>
					<div class="rating rating-doce">
						<input type="number" name="doce" hidden value="0">
						<i class='bx bx-star star' style="--i: 0;" onclick="activate_start('doce',0)"></i>
						<i class='bx bx-star star' style="--i: 1;" onclick="activate_start('doce',1)"></i>
						<i class='bx bx-star star' style="--i: 2;" onclick="activate_start('doce',2)"></i>
						<i class='bx bx-star star' style="--i: 3;" onclick="activate_start('doce',3)"></i>
						<i class='bx bx-star star' style="--i: 4;" onclick="activate_start('doce',4)"></i>
				</div>
			</div>
		
			<br>

		<div class="wrapper">
			<h5>Pregunta 13: ¿Cómo calificarias todos los cursos de CapacitaT?</h5>
				<div class="rating rating-diez-y-seis">
					<input type="number" name="diez-y-seis" hidden value="0">
					<i class='bx bx-star star' style="--i: 0;" onclick="activate_start('diez-y-seis',0)"></i>
					<i class='bx bx-star star' style="--i: 1;" onclick="activate_start('diez-y-seis',1)"></i>
					<i class='bx bx-star star' style="--i: 2;" onclick="activate_start('diez-y-seis',2)"></i>
					<i class='bx bx-star star' style="--i: 3;" onclick="activate_start('diez-y-seis',3)"></i>
					<i class='bx bx-star star' style="--i: 4;" onclick="activate_start('diez-y-seis',4)"></i>
				</div>
			</div>

	<br>

	<div class="wrapper">
		<h5>Dejanos tus comentarios</h5>
			<textarea name="opinion" cols="30" rows="5" placeholder="Tu opinion..."></textarea>
			<div class="btn-group">
				<button type="submit" class="btn submit">Enviar</button>
				<button class="btn cancel">Cancelar</button>
			</div>
		</div>
	</form>

	<br>

	<div class="wrapper">
    <input type="button" value="Generar PDF" onclick="print_facture()">
	</div>
</body>
<script>
function print_facture() {
    //obtenemos los valores de los inputs del formulario 
    console.log('hi')
    var valorUno = document.querySelector('input[name="uno"]').value;
    var valorDos = document.querySelector('input[name="dos"]').value;
    var valorTres = document.querySelector('input[name="tres"]').value;
    var valorCuatro = document.querySelector('input[name="cuatro"]').value;
    var valorCinco = document.querySelector('input[name="cinco"]').value;
    var valorSeis = document.querySelector('input[name="seis"]').value;
    var valorSiete = document.querySelector('input[name="siete"]').value;
    var valorOcho = document.querySelector('input[name="ocho"]').value;
    var valorNueve = document.querySelector('input[name="nueve"]').value;
    var valorDiez = document.querySelector('input[name="diez"]').value;
    var valorOnce = document.querySelector('input[name="once"]').value;
    var valorDoce = document.querySelector('input[name="doce"]').value;
    console.log('hola')
	var valorTrece = document.querySelector('input[name="diez-y-seis"]').value;
    console.log('hola')
    // Definir la estructura del documento PDF
    var docDefinition = {
        content: [
            { text: 'Factura', style: 'header' },
            { text: 'Name: ' + valorUno },
            { text: 'Name: ' + valorDos },
            { text: 'Name: ' + valorTres },
            { text: 'Name: ' + valorCuatro },
            { text: 'Name: ' + valorCinco },
            { text: 'Name: ' + valorSeis },
            { text: 'Name: ' + valorSiete },
            { text: 'Name: ' + valorOcho },
            { text: 'Name: ' + valorNueve },
            { text: 'Name: ' + valorDiez },
            { text: 'Name: ' + valorOnce },
            { text: 'Name: ' + valorDoce },
            { text: 'Name: ' + valorTrece }
        ],
        styles: {
            header: {
                fontSize: 18,
                bold: true,
                margin: [0, 0, 0, 10]
            }
        }
    };

    // Generar el documento PDF
    pdfMake.createPdf(docDefinition).download('factura.pdf');
}

</script>
</html>