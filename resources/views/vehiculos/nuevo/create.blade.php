@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Vehículo</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'vehiculos/nuevo','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="patente">Patente</label>
            	<input type="text" name="patente" class="form-control" placeholder="patente...">
            </div>
         	<div class="form-group">
            	<label for="id_marca">Marca</label>
            	<input type="text" name="id_marca" class="form-control" placeholder="id_marca...">
            </div>

             <div class="form-group">
            	<label for="modelo">Modelo</label>
            	<input type="text" name="modelo" class="form-control" placeholder="modelo...">

            <div class="form-group">
            	<label for="tipo_neumatico">Tipo Neumatico</label>
            	<input type="number" name="tipo_neumatico" class="form-control" placeholder="Tipo Neumatico...">

            <div class="form-group">
                  <label for="aro">Aro</label>
                  <input type="number" name="aro" class="form-control" placeholder="Aro...">

            <div class="form-group">
                  <label for="tipo_combustible">Tipo Combustible</label>
                  <input type="number" name="tipo_combustible" class="form-control" placeholder="Tipo Combustible...">

            <div class="form-group">
                  <label for="kilometraje_inicial">Kilometraje</label>
                 
                  <input type="number" value="0" readonly="readonly" name="kilometraje" class="form-control" placeholder="kilometraje...">

            </div>


            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection


