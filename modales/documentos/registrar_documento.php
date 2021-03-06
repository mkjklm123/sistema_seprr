<form id="agregardoc" method="POST" action="modales/documentos/agregar_doc_bd.php">
	<div class="modal fade" id="agregar_doc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background: ">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">Agregar documento</h4>
				</div>
				<div class="modal-body">
					<div id="datos_modificar"></div>

					<div class="row">
						<div class="col-sm-6">

							<div class="form-group">
								<label for="nombres" class="control-label">Tipo de Documento.</label>
								<select class="form-control" name="tipo_doc" id="tipo_doc">
									<option value="0">Seleccionar..</option>
									<?php  while ( $rslt3 = $result3 -> fetch_array(MYSQLI_ASSOC) ) {?>
										<option value="<?php echo utf8_encode($rslt3['id']);?>"><?php echo utf8_encode($rslt3['tipo']);?></option>
									<?php } ?>
								</select>
							</div>

						</div>
						<div class="col-sm-6">

							<div class="form-group">
								<label for="nombres" class="control-label">Nro de Documento.</label>
								<input type="text" class="form-control" id="nro_doc" name="nro_doc" required="required">
							</div>

						</div>
					</div>

					<div class="row">

						<div class="col-sm-12">

							<div class="form-group">
								<label for="fecha" class="control-label">Asunto.</label>
								<input type="text" class="form-control" id="asunto" name="asunto" > 
							</div>
							
						</div>

					</div>
					<div class="row" hidden="true">

						<div class="col-sm-6">

							<div class="form-group">
								<label for="nombres" class="control-label">Id. Usuario</label>
								<input type="text" class="form-control" id="id_user" name="id_user" value="<?php echo $idUsuario; ?>">
							</div>

						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Agregar</button>
				</div>
			</div>
		</div>
	</div>
</form>