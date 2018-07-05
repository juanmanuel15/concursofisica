<?php 

	#Información del Proyecto
	$_nProyecto = $_POST["nProyecto"];
	$_ieducativa= $_POST["ieducativa"];
	$_categoria = $_POST["cparticipacion"];
	$_link = $_POST["link"];
	$_comentarios = $_POST["comentarios"];

	#Información de los Participantes
	$_nombreP1 = $_POST["nombreP1"];
	$_apellidoPP1 = $_POST["apellidoPP1"];
	$_apellidoMP1 = $_POST["apellidoMP1"];
	$_turnoP1 = $_POST["turnoP1"];
	$_semestreP1 = $_POST["semestreP1"];

	$_nombreP2 = $_POST["nombreP2"];
	$_apellidoPP2 = $_POST["apellidoPP2"];
	$_apellidoMP2 = $_POST["apellidoMP2"];
	$_turnoP2 = $_POST["turnoP2"];
	$_semestreP2 = $_POST["semestreP2"];

	$_nombreP3 = $_POST["nombreP3"];
	$_apellidoPP3 = $_POST["apellidoPP3"];
	$_apellidoMP3 = $_POST["apellidoMP3"];
	$_turnoP3 = $_POST["turnoP3"];
	$_semestreP3 = $_POST["semestreP3"];


	$_nAsesor = $_POST["nAsesor"];
	$_apellidoPA = $_POST["apellidoPA"];
	$_apellidoMA = $_POST["apellidoMA"];


	#echo "Nombre: $_nombreP1 $_apellidoPP1 $_apellidoMP1" . " Turno: $_turnoP1". " Semestre: $_semestreP1 <br>";
	if(!empty($_nombreP2)  || !empty($_apellidoPP2) || !empty($_apellidoMP2))
		$_nombreCompletoP2 = "Nombre: $_nombreP2 $_apellidoPP2 $_apellidoMP2" . " Turno: $_turnoP2". " Semestre: $_semestreP2 <br>";	
	if(!empty($_nombreP2)  || !empty($_apellidoPP2) || !empty($_apellidoMP2))	
		$_nombreCompletoP3 = "Nombre: $_nombreP3 $_apellidoPP3 $_apellidoMP3" . " Turno: $_turnoP3". " Semestre: $_semestreP3 <br>";
	
	#echo "Nombre: $_nAsesor $_apellidoPA $_apellidoMA <br>";


	#Información de Contacto
	$_nombreC = $_POST["nombreC"];
	$_apellidoPC = $_POST["apellidoPC"];
	$_apellidoMC = $_POST["apellidoMC"];
	$_correoC = $_POST["correoC"];
	$_telefonoC = $_POST["telefonoC"];

	#echo "Nombre: $_nombreC $_apellidoPC $_apellidoMC" . " correo: $_correoC". " Teléfono: $_telefonoC <br>";

	
	
?>