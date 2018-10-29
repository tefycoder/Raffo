
	<div class="contenedor-formulario" id="exito">
		<h2>Contactanos</h2>
		<div id="linea_d"></div>
		<div class="wrap">

			<form action="envio.php" class="formulario" enctype="multipart/form-data"  name="formulario_registro" method="post">
				<div>

					<div class="input-group">
						<input input type="text" id="nombre" name="nombre"  onkeypress="return valida_letra(event)" required onpaste="return false" autocomplete="off"
						 placeholder="Nombre Completo">
						
					</div>

			
					<div class="input-group">
						<input type="email" id="correo" name="email" required placeholder="Correo">
						
					</div>

					<div class="input-group">
						<input type="text" name="numpiso" onkeypress="return valida_num(event)" minlegth="9"  required onpaste="return false" autocomplete="off" placeholder="Celular">
						
					</div>

					
					<div class="input-group">
						<input type="text" id="nombre" name="mensaje" onkeypress="return valida_letra_num(event)" required onpaste="return false" autocomplete="off" placeholder="Mensaje">
						
					</div>

						
					<input type="submit" id="btn-submit" value="Enviar">
				</div>
			</form>
		</div>
	</div>

	