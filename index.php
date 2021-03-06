<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<meta name="title" content="">

	<meta name="description" content="">

	<meta name="keyword" content="">

	<title>Ópalo Studio</title>
	<link rel="icon" type="image/png" id="dinamico" href="vistas/img/favicon.png" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
	 crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<link href="vistas/css/app.css" media="all" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/flick/jquery-ui.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/balloon-css/0.5.0/balloon.min.css">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
	<script src="vistas/js/jquery.nicescroll.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>

	




	<?php
	include('controladores/controlador.barra.php');
	include('controladores/controlador.zonaB_video.php');
	//Los controladores que se utilizan en todas las páginas, se incluyen fuera del if de abajo.
	
	if(isset($_GET['id'])){
		include('controladores/controlador.finalizacionPago.php');
		
	}
	elseif(isset($_GET['page'])){//Esta variable verifica que exista un id para la página visitada,
						   //si no existe, es porque está en el index, entonces lo del index se incluye
						   //en el else en el orden que deben aparecer las closas

		switch($_GET['page']){
			

			case '1':
			//Video
			//include('controladores/controlador.zonaB_video.php');
			break;

			case '2':
			//Work
			include('controladores/controlador.zonaB_work.php');
			break;

			case '3':
			//Laboratorio
			include('controladores/controlador.lab.php');
			break;

			case '4':
			//Formulario
			include('controladores/controlador.zonaA_formulario.php');
			break;

			case '5':
			//Ludicultura
			include('controladores/controlador.zonaB_ludi.php');
			break;

			case '6':
			//Floyd
			include('controladores/controlador.zonaB_floyd.php');
			break;

			case '7':
			//Lookgeo
			include('controladores/controlador.zonaB_lookgeo.php');
			break;

			case '8':
			//PaoPetite
			include('controladores/controlador.zonaB_pao.php');
			break;

			case '9':
			//Publicación
			include('controladores/controlador.zonaB_protoplasma.php');
			break;

			case '10':
			//Cumbre
			include('controladores/controlador.zonaB_cumbre.php');
			break;

			case '11':
			//Alex
			include('controladores/controlador.zonaB_alexferez.php');
			break;

			case '12':
			//Alex
			include('controladores/controlador.formularioX.php');
			break;



		}
	}
	else{
		//Aquí se incluyen todos los controladores del index.
		//include('controladores/controlador.barra.php');
	}

	?>
</head>

<body>
	<div class="zonaA">
		<?php


if(isset($_GET['id'])){
	include('vistas/modulos/finalizacionPago.php');
}

elseif(isset($_GET['page'])){
	

	switch($_GET['page']){

		case '1':
		//Video
		include('vistas/modulos/zonaA_video.php');
		break;

		case '2':
		//Work
		include('vistas/modulos/zonaA_work.php');
		break;

		case '3':
		//Lab
		include('vistas/modulos/zonaA_lab.php');
		break;

		case '4':
		//Formulario
		include('vistas/modulos/zonaA_formulario.php');
		break;

		case '5':
		//Ludicultura
		include('vistas/modulos/zonaA_ludi.php');
		break;

		case '6':
		//Floyd
		include('vistas/modulos/zonaA_floyd.php');
		break;

		case '7':
		//Lookgeo
		include('vistas/modulos/zonaA_lookgeo.php');
		break;

		case '8':
		//PaoPetite
		include('vistas/modulos/zonaA_pao.php');
		break;

		case '9':
		//Publicación
		include('vistas/modulos/zonaA_proto.php');
		break;

		case '10':
		//Cumbre
		include('vistas/modulos/zonaA_cumbre.php');
		break;

		case '11':
		//Alex
		include('vistas/modulos/zonaA_alex.php');
		break;

		case '12':
		//formulario
		include('vistas/modulos/zonaA_formularioX.php');
		break;
		

	}
	}
	else {
		include('vistas/modulos/zonaA_video.php');
	}



?>
	</div>
	<div class="zonaB">
		<?php
include('vistas/modulos/zonaB_menu.php');
include('vistas/modulos/zonaB_links.php');




if(isset($_GET['id'])){
	include('vistas/modulos/finalizacionPago.php');
}

elseif(isset($_GET['page'])){
	

	switch($_GET['page']){

		case '1':
		//Video
		include('vistas/modulos/zonaB_video.php');
		break;

		case '2':
		//Work
		include('vistas/modulos/zonaB_work.php');
		break;

		case '3':
		//Laboratorio
		include('vistas/modulos/zonaB_lab.php');
		break;

		case '4':
		//Formulario
		include('vistas/modulos/zonaB_formulario.php');
		break;

		case '5':
		//Ludicultura
		include('vistas/modulos/zonaB_ludi.php');
		break;

		case '6':
		//Floyd
		include('vistas/modulos/zonaB_floyd.php');
		break;

		case '7':
		//Lookgeo
		include('vistas/modulos/zonaB_lookgeo.php');
		break;

		case '8':
		//PaoPetite
		include('vistas/modulos/zonaB_pao.php');
		break;

		case '9':
		//Proto
		include('vistas/modulos/zonaB_proto.php');
		break;

		case '10':
		//Cumbre
		include('vistas/modulos/zonaB_cumbre.php');
		break;

		case '11':
		//Alex
		include('vistas/modulos/zonaB_alex.php');
		break;

		case '12':
		//formulario
		include('vistas/modulos/zonaB_formularioX.php');
		break;

		


	}
}
else {
	include('vistas/modulos/zonaB_video.php');
}


?>
	</div>


</body>

</html>