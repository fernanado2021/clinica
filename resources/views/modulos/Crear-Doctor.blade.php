@extends('plantilla')
@section('content')
	<div class="content-wrapper">
		<section class="content-header">
			<h1 style=" font-family:algeria;">Crear Doctor</h1>
		</section>
		<section class="content">
			<div class="box">
				<div class="box-body">
					<form action="" method="post">
					@csrf
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-12">
								<h1 style="text-align:center; font-family:algeria;">Crear Nuevo Doctor</h1>
								<img src="https://static.vecteezy.com/system/resources/previews/004/741/910/non_2x/add-user-or-friend-icon-free-vector.jpg" alt="" style="width:20%;margin-left: 40%;">
							</div>

							<div class="form-group col-md-12">
								<h4>Nombre y Apellido:</h4>
								<input type="text" class="form-control input-md" name="name" required="">
							</div>

							<div class="form-group col-md-6">
								<h4>Sexo:</h4>
								<select class="form-control input-md"  name="sexo" required="">
									<option value="">Seleccionar...</option>
									<option value="Femenino">Femenino</option>
									<option value="Masculino">Masculino</option>
								</select>
							</div>

							<div class="form-group col-md-6">
								<h4>Consultorio:</h4>
								<select class="form-control input-md"  name="id_consultorio" required="">
										<option value="">Seleccionar...</option>
									@foreach($consultorios as  $consultorio)
										<option value="{{$consultorio->id}}">{{$consultorio->consultorio}}</option>
									@endforeach
								</select>
							</div>

							<div class="form-group col-md-6">
								<h4>Email:</h4>
								<input type="email" class="form-control input-md" name="email" value="{{old('email')}}" required="">
								@error('email')
									<br><div class="alert alert-danger">El email ya existe.</div>
								@enderror
							</div>

							<div class="form-group col-md-6">
								<h4>Documento:</h4>
								<input type="text" class="form-control input-md" name="documento" required="">
							</div>

							<div class="form-group col-md-6">
								<h4>Telefono:</h4>
								<input type="text" class="form-control input-md" name="telefono" required="">
							</div>

							<div class="form-group col-md-6">
								<h4>Contraseña:</h4>
								<input type="text" class="form-control input-md" name="password" value="" required="">
							</div>

							<div class="form-group col-md-6">
								<button type="submit" class="btn btn-primary btn-lg fa fa-floppy-o"> Agregar</button>
							</div>

						</div>
					</div>
					</form>
				</div>
			</div>
		</section>
	</div>
@endsection