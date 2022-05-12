@extends('plantilla')
@section('content')
	<div class="content-wrapper">
		<section class="content-header">
			<h1 style="font-family:algeria;">Editar Inicio</h1>
		</section>
		<section class="content">
			<div class="box">
				<div class="box-body">
					<form  method="post" enctype="multipart/form-data">
						@csrf
						@method('put')
						<div class="row">
							<div class="col-md-6 col-xs-12">
								<h4>Días:</h4>
								<input type="text" class="form-control input-md" name="dias" value="{{$inicio->dias}}">
								<div class=" form-group">
									<h4>Horarios:</h4>
									Desde: <input type="time" class="form-control input-md" name="horaInicio" value="{{$inicio->horaInicio}}">
									Hasta: <input type="time" class="form-control input-md" name="horaFin" value="{{$inicio->horaFin}}">
								</div>
								<h4>Direccion:</h4>
								<input type="text" class="form-control input-md" name="direccion" value="{{$inicio->direccion}}">
								<h4>Telefono:</h4>
								<input type="text" class="form-control input-md" name="telefono" value="{{$inicio->telefono}}">
								<h4>Email:</h4>
								<input type="email" class="form-control input-md" name="email" value="{{$inicio->email}}">
							</div>

							<div class="col-md-6 col-xs-12">
								<br><br>
								<h4>Logo:</h4>
								<input type="file" name="logoN">
								<br>
								<img src="http://localhost/clinica-l8/public/storage/{{$inicio->logo}}" width="200px" >
								<br><br>
								<button type="submit" class="btn btn-success">Guardar Cambios</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>
@endsection