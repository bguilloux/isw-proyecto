@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Conductor</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'acceso/chofer','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
             <div class="form-group">
                  <label for="rut_conductor">Rut Conductor</label>
                  <input type="number" name="rut_conductor" class="form-control" placeholder="Rut Conductor...">
            </div>

            <div class="form-group">
            	<label for="patente">Patente</label>
            	<input type="text" name="patente" class="form-control" placeholder="Patente...">
                 
            </div>
          
             <div class="form-group">
            	<label for="nombre_conductor">Nombre Conductor</label>
            	<input type="text" name="nombre_conductor" class="form-control" placeholder="Nombre Conductor...">

            <div class="form-group">
            	<label for="pass_conductor">Contraseña</label>
            	<input type="password" name="pass_conductor" class="form-control" placeholder="Contraseña...">

            </div>


            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection