<div class="modal fade modal-sllide-in-rigth" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$so->nro_socio}}">

	<form method="post" action="{{url('/web/Educacion/'.$so->nro_socio.'/save')}}">
		{{csrf_field()}}
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">

					<h4 class="modal-title">Le enviaremos el link del curso a su celular</h4>
				</div>
				<div class="modal-body">

					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="celular"><strong>Ingrese su número de celular</strong></label>
							<input type="number" min="0" name="celular" class="form-control" value="{{old('celular',$so->celular)}}" required>
						</div>
					</div>

				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Confirmar</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</div>
	</form>
</div>
</div>