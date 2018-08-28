@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Registro de Mantencion</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'vehiculos/mantencion','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="patente">Patente</label>
            	<input type="text" name="patente" class="form-control" placeholder="patente...">
            </div>
         	<div class="form-group">
            	<label for="fecha">Fecha</label>
            	<input type="date" name="fecha" class="form-control" placeholder="Fecha...">
            </div>

            <div class="form-group">
                  <label for="kilometraje">Kilometraje</label>
                  <input type="number" name="kilometraje" class="form-control" placeholder="kilometraje...">

            </div>


            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection


