<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de Suscriptores</h1>

	</section>

	<section class="content">
		
		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#MensajesS">Enviar Mensaje</button>

		<br><br>

		<div class="box">
			
			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped TB">
					
					<thead>
						
						<tr>
							
							<th>N°</th>
							<th>Email</th>
							<th>Eliminar</th>

						</tr>

					</thead>

					<tbody>

						<?php

						$item = null;
						$valor = null;

						$suscriptores = SuscriptoresC::MostrarSuscriptoresC($item, $valor);

						foreach ($suscriptores as $key => $value) {
							
							echo '<tr>
							
									<td>'.($key+1).'</td>

									<td>'.$value["email"].'</td>

									<td>

										<a href=""><button class="btn btn-danger"><i class="fa fa-times"></i></button></a>

									</td>

								</tr>';

						}

						?>
						
						

					</tbody>

				</table>

			</div>

		</div>

	</section>

</div>




<div class="modal fade" role="dialog" id="MensajesS">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form role="form" method="post">
				
				<div class="modal-body">
					
					<div class="box-body">
						
						<div class="form-group">
							
							<h2>Título:</h2>

							<input type="text" class="form-control input-lg" name="tituloS" placeholder="Título..." required="">

						</div>

						<div class="form-group">
							
							<h2>Mensaje:</h2>

							<textarea class="form-control" name="mensajeS" placeholder="Escriba el Mensaje..." required="">
								
							</textarea>

						</div>

					</div>

				</div>

				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary">Enviar</button>

					<button type="button" class="btn btn-danger">Cancelar</button>

				</div>

			</form>

		</div>

	</div>

</div>