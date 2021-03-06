<form id="editardoc" method="POST" action="modales/documentos/editar_doc_user_no_programado_bd.php">
	<div class="modal fade" id="editar_doc_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background: ">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="exampleModalLabel">Editar documento</h4>
				</div>
				<div class="modal-body">
					<div id="datos_modificar"></div>

					<div class="row">
						<div class="col-sm-6">

							<div class="form-group">
								<label for="nombres" class="control-label">Tipo de Documento.</label>
								<select class="form-control" name="tipo_doc" id="tipo_doc">
									<?php  while ( $rslt4 = $result4 -> fetch_array(MYSQLI_ASSOC) ) {?>
										<option value="<?php echo utf8_encode($rslt4['id']);?>"><?php echo utf8_encode($rslt4['tipo']);?></option>
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
								<label for="nombres" class="control-label">Id. doc</label>
								<input type="text" class="form-control" id="id" name="id"">
							</div>

						</div>
					</div>

					<div class="row">

						<div class="col-sm-6">

							<div class="form-group">
								<label for="nombres" class="control-label">Registrar entrega de doc.</label>
								<select class="form-control" name="reg_entrega" id="reg_entrega">
									<option value="1">Seleccionar</option>
									<option value="2">Entregado</option>
								</select>
							</div>

						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Guardar cambios</button>
				</div>
			</div>
		</div>
	</div>
</form>