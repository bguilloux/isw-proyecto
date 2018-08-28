@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Usuario: {{ $categoria->patente}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($categoria,['method'=>'PATCH','route'=>['vehiculos.aumento.update',$categoria->patente]])!!}
            {{Form::token()}}
         	<div class="form-group">
            	<label for="id_marca">Nombre</label>
            	<input type="text" name="id_marca" class="form-control" value="{{$categoria->id_marca}}" placeholder="Nombre...">
            </div>

             <div class="form-group">
            	<label for="tipo_neumatico">tipo_neumatico</label>
            	<input type="number" name="tipo_neumatico" class="form-control" value="{{$categoria->tipo_neumatico}}" placeholder="Pass...">

            	 <div class="form-group">
            	<label for="aro">Tipo Usuario</label>
            	<input type="number" name="aro" class="form-control" value="{{$categoria->aro}}" placeholder="Tipo Usuario...">
            </div>

             <div class="form-group">
            	<label for="tipo_combustible">Password</label>
            	<input type="number" name="tipo_combustible" class="form-control" value="{{$categoria->tipo_combustible}}" placeholder="Pass...">

            	 <div class="form-group">
            	<label for="kilometraje">Tipo Usuario</label>
            	<input type="number" name="kilometraje" class="form-control" value="0" placeholder="Tipo Usuario...">
            </div>
      		 <div class="form-group">
            	<button class="btn btn-primary" type="submit">Confirmar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection

