<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	
	<form action="datos.php" method="post">

		<p>	Informacion del proyecto<br/>
		Nombre del proyecto:		<input type="text" name="nProyecto" id="nombreProyecto" required>
		Institución educativa:		<input type="text" name="ieducativa" id="escuela" required>
		categoria de participación:	
									<select name="cparticipacion">
										<option value="AD">Aparato de uso didáctico</option>
										<option value="AT">Aplicación Tecnológica</option>
										<option value="EF">Experimento de Física</option>										
									</select>

		<br/>Requerimientos:<br/>	Agua: <input type="checkbox" name="req[]" id="1" value="Agua"><br/>
									Conexión Electrica: <input type="checkbox" name="req[]" id="2" value="Conexión Electrica"><br/>
									Espacio al aire libre <input type="checkbox" name="req[]" id="3" value="Espacio al Aire Libre">

		link del proyecto: <input type="text" name="link" id="link" required><br/>

		observaciones/Comentarios: <textarea name="comentarios" rows="3" cols="40">Escribe aquí tus comentarios</textarea>


		</p>
		
		<p>Introduce tus datos personales: <br/>
		Participante 1: <br>

		Nombre: <input type="text" name="nombreP1" id="nombreP1" required>
		Apellido Paterno: <input type="text" name="apellidoPP1" id="apellidoP1" required>
		Apellido Materno: <input type="text" name="apellidoMP1" id="apellidoM2" required>
		Turno: 				<select name="turnoP1">
										<option value="M">Matutino</option>
										<option value="V">Vespertino</option>									
							</select>
		Semestre: 			<select name="semestreP1">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>									
							</select>

		<br> Participante 2: <br>

		Nombre: 			<input type="text" name="nombreP2" id="nombreP2" >
		Apellido Paterno: 	<input type="text" name="apellidoPP2" id="apellidoP2">
		Apellido Materno: 	<input type="text" name="apellidoMP2" id="apellidoM2">
		Turno: 				<select name="turnoP2">
										<option value="M">Matutino</option>
										<option value="V">Vespertino</option>									
							</select>
		Semestre: 			<select name="semestreP2">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>									
							</select>


		<br> Participante 3:<br>

		Nombre: 			<input type="text" name="nombreP3" id="nombreP3">
		Apellido Paterno: 	<input type="text" name="apellidoPP3" id="apellidoP3">
		Apellido Materno: 	<input type="text" name="apellidoMP3" id="apellidoM3">
		Turno: 				<select name="turnoP3">
										<option value="M">Matutino</option>
										<option value="V">Vespertino</option>									
							</select>

		Semestre:			<select name="semestreP3">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>									
							</select>	

		<br>Asesor: <br>

		Nombre: 			<input type="text" name="nAsesor" id="asesor" required>
		Apellido Paterno: 	<input type="text" name="apellidoPA" id="apellidoPA" required>
		Apellido Materno: 	<input type="text" name="apellidoMA" id="apellidoMA" required>

		</p>


		<p> Información de contacto <br>

			Nombre: 			<input type="text" name="nombreC" id="nombreC" required>
			Apellido Paterno: 	<input type="text" name="apellidoPC" id="apellidoC" required>
			Apellido Materno: 	<input type="text" name="apellidoMC" id="apellidoC" required>
			Correo: 			<input type="email" name="correoC" id="correoC" required><br>
			Teléfono: 			<input type="text" name="telefonoC" id="telefonoC" required>

		</p>



		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="Borrar" value="Borrar">
		<input type="button" name="Cancelar" value="Carcelar" onclick="cerrar()">
	</form>



</body>
</html>