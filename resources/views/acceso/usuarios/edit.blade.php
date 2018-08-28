@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Usuario: {{ $categoria->email}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($categoria,['method'=>'PATCH','route'=>['acceso.usuarios.update',$categoria->id]])!!}
            {{Form::token()}}
            <div class="form-group">
            </div>
         	<div class="form-group">
            	<label for="name">Nombre</label>
            	<input type="text" name="name" class="form-control" value="{{$categoria->name}}" placeholder="Nombre...">
            </div>

             <div class="form-group">
            	<label for="email">Email</label>
            	<input type="text" name="email" class="form-control" value="{{$categoria->email}}" placeholder="Pass...">

            	 <div class="form-group">
            	<label for="password">Contraseña</label>
            	<input type="password" name="password" class="form-control" value="{{$categoria->password}}" placeholder="Tipo Usuario...">
            </div>
       <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection