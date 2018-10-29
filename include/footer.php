<a name="contacto"></a>

<div id="mapa">

	<img src="img/mapa.png">

	<!--
	<div id="info_mapa">
		<h4>Te esperamos</h4>
		<h1>Tel. 4544423</h1>
		<h2>Calle Shell 120 Int 1401 <br> <span class="distrito">Miraflores Lima - Perú</span></h2>
	</div>
	-->

</div>




<section class="contact">
<!--
	<div id="texturapunto"></div>
	<div id="texturacolor"></div>
	
	<section class="contact_img">
		<img src="img/fondo_formulario.jpg">

	</section>


	<section class="contact_form">

		<h3>Empezemos</h3>
		<form>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Nombres</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Celular</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Correo</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
		  </div>

		  <div class="form-group">
			 <label for="comment">Comentario</label>
			 <textarea class="form-control" rows="5" id="comment"></textarea>
		  </div>

		  <button type="submit" class="btn btn-primary" style="padding: 8px 0px;width: 100%; background: #f29200; border: none; color: white;">ENVIARS</button>
		</form>

	</section>
-->
	<div class="formulario_2017">
		
		<h3>Empezemos</h3>
		<form action="envio.php" class="formulario" enctype="multipart/form-data"  name="formulario_registro" method="post">

		  <div class="form-group">
		    <label for="exampleInputEmail1">Nombres</label>
		    <input input type="text" id="nombre" name="nombre"  onkeypress="return valida_letra(event)" required onpaste="return false" autocomplete="off">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Celular</label>
		    <input type="text" name="numpiso" onkeypress="return valida_num(event)" minlegth="9"  required onpaste="return false" autocomplete="off">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputEmail1">Correo</label>
		    <input type="email" id="correo" name="email" required placeholder="Correo">
		  </div>

		  <div class="form-group">
			 <label for="comment">Comentario</label>
			 <textarea class="form-control" rows="5" id="mensaje" name="mensaje" onkeypress="return valida_letra_num(event)" required onpaste="return false" autocomplete="off"></textarea>
		  </div>

		  <button type="submit" class="btn btn-primary" style="padding: 8px 20px; background: #df4312; border: none; color: white;    border-radius: 0.7rem;">Enviar</button>
		</form>
	</div>


	<div class="franja_datos">

		<div>
			<h4><span class="fa fa-location-arrow"></span>Direcciones</h4>
			<ul>
				
				<li><span> Of. Principal: </span> El Derby 055, Torre 1 Piso 7, Santiago de Surco </li>

				<li><span>Sucursal:</span> Calle Shell 120 Int 1401 - Miraflores </li>
				
			</ul>
		</div>

		<div>
			<h4><span class="fa fa-pencil"></span>Correo</h4>
			<ul>
				<li>contacto@ntfutura.com</li>
			</ul>
		</div>

		<div>
			<h4><span class="fa fa-phone"></span>Telefono</h4>
			<ul>
				<li>(01) 716-4140</li>
			</ul>
		</div>


		<div>
			<h4><span class="fa fa-mobile-phone"></span>Whatsapp</h4>
			<ul>
				<li>997 310 030</li>
			</ul>
		</div>

		

		




	</div>

</section>


<footer>
	
	<div class="redes" >
		<img src="img/logo_2.png">
	</div>

	<div class="redes">
		<ul>
			<li><a href="https://www.facebook.com/ntfutura/" target="_blank"><span class="fa fa-facebook"></span></a></li>

			<li><a href="https://twitter.com/ntfutura" target="_blank"><span class="fa fa-twitter"></span></a></li>

			<li><a href="https://www.youtube.com/user/NTFuturaMarketing" target="_blank"><span class="fa fa-youtube"></span></a></li>
			
			<li><a href="https://pe.linkedin.com/company/nt-seo-web" target="_blank"><span class="fa fa-linkedin"></span></a></li>

		</ul>
	</div>
</footer>


</body>



<span class="ir-arriba"> <img src="img/flecha.png"></span>

<!--SCRIPTS-->

<!--<script src="https://code.jquery.com/jquery.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/eskju.jquery.scrollflow.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/beetle.js"></script>
<script src="js/arriba.js"></script>
<script src="js/anclas.js"></script>
<script src="js/menu_responsive.js"></script>
<script src="js/cajas.js"></script>
<script src="js/formulario_numero.js"></script>





</html>