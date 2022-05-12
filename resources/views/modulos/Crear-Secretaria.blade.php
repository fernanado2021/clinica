@extends('plantilla')
@section('content')
	<div class="content-wrapper">
		<section class="content-header">
			<h1 style=" font-family:algeria;">Crear Secretaria</h1>
		</section>
		<section class="content">
			<div class="box">
				<div class="box-body">
					<form action="" method="post">
					@csrf
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-12">
								<h1 style="text-align:center; font-family:algeria;">Crear Nueva Secretaria</h1>
								<img src="https://static.vecteezy.com/system/resources/previews/004/741/910/non_2x/add-user-or-friend-icon-free-vector.jpg" alt="" style="width:20%;margin-left: 40%;">
							</div>
							<div class="form-group col-md-12">
								<h4>Nombre y Apellido:</h4>
								<input type="text" name="name" class="form-control input-md"  value="{{old('name')}}"  required="">
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
								<input type="text" name="documento" class="form-control input-md"  value="{{old('documento')}}"  required="">
							</div>

							<div class="form-group col-md-6">
								<h4>Telefono:</h4>
								<input type="text" name="telefono" class="form-control input-md"  value="{{old('telefono')}}"  required="">
							</div>

							<div class="form-group col-md-6">
								<h4>Contraseña</h4>
								<input type="text" name="password" class="form-control input-md" value="{{old('password')}}"  required="">
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