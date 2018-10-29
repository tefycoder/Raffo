<html>
<head>
	<title>NT FUTURA</title>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-104310933-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-104310933-2');
</script>


	<script type="text/javascript">
	//inicializamos mostrando el div 2 y 3 ocultos

	
  function miFuncion() {
    document.getElementById('sld_1').style.display = 'block';
    document.getElementById('sld_2').style.display = 'none';
    document.getElementById('sld_3').style.display = 'none';
   //llamas a la funcion 2 luego de 3 segundos
    setTimeout(mifuncion2,3000);
  }

function mifuncion2(){
    document.getElementById('sld_1').style.display = 'none';
    document.getElementById('sld_2').style.display = 'block';
    document.getElementById('sld_3').style.display = 'none';
//llamas a la funcion 3 luego de 3 segundos
    setTimeout(mifuncion3,3000);
}

function mifuncion3(){
	document.getElementById('sld_1').style.display = 'none';
    document.getElementById('sld_2').style.display = 'none';
    document.getElementById('sld_3').style.display = 'block';
    setTimeout(miFuncion,3000);
}
</script>

	<!--responsive-->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

	<!-- imagen de favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<meta name="description" content="Agencia de Marketing Digital especializada en Transformación Digital e Inteligencia Comercial. Llámanos: (01)  716-4140 / 758-9126"/>

	<meta name="autor" content="NT Futura, contacto@ntfutura.com"/>

	<meta name="keywords" content="Marketing Digital, Publicidad en Internet, Publicidad Online, Google Adwords, Diseño de Páginas Web, Paginas Web, Web Responsive, Redes Sociales, Community Manager, Analitica Digital, Google Analitycs"/>



	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/layers.min.css" media="screen">
	<link rel="stylesheet" href="css/style_2.css">

	<link rel="stylesheet" href="css/style.css">

	

	<!-- fuentes -->
  	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,600,700" rel="stylesheet">





</head>

<body onload="miFuncion()">

<section id="nav_movil">

		<div id="nav_nuevo">
			<div class="cerrar" ><span class="icon-close"></span></div>

			<img src="img/logo_2.png">
			
			<ul>

				<li><span class="icon-home"></span><a href="index.php">Inicio</a></li>

				<li><span class="icon-heart"></span><a href="nosotros.php" class="cerrar_2">Nosotros</a></li>

				<li><span class="icon-folder"></span><a href="index.php#servicios" class="cerrar_2">Servicios</a></li>

				<li><span class="icon-eye"></span><a href="proyectos.php" class="cerrar">Proyectos</a></li>

				<li style="color: #0198ff;"><span class="icon-email"></span><a href="#contacto" class="cerrar">Contacto</a></li>
				
				
			</ul>

			<br>
			<!--
			<div class="empresa_redes_contacto">
				<ul>
					<li><a href="https://www.facebook.com/" target="_blank"><span class="icon-facebook2"></span></a></li>
					<li><a href="https://www.linkedin.com/" target="_blank"><span class="icon-linkedin"></span></a></li>
				</ul>
			</div>
			-->
		</div>
</section>

<div id="head">
	

	<section class="logo">
		<a href="index.php"><img src="img/logo.png"></a>

		<div class="menu_responsive">
	        <div class="linea_a"></div>
	        <div class="linea_b"></div>
	        <div class="linea_c"></div>
	        <div class="linea_d"></div>
	        <div class="linea_e"></div>
      	</div>

	</section>
	

	<nav>
		<ul>
			<a href="index.php"><li>Inicio</li></a>
			<a href="nosotros.php"><li>Nosotros</li></a>
			<a href="index.php#servicios"><li>Servicios</li></a>
			<a href="proyectos.php"><li>Proyectos</li></a>
			<a href="#contacto"><li style="color: #0198ff;">Contacto</li></a>
		</ul>
	</nav>
</div>