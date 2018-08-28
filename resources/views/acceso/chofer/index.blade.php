@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado Conductores <a href="chofer/create"><button class="btn btn-success">Nuevo</button></a></h3>
		
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Rut</th>
					<th>Patente</th>
					<th>Nombre</th>
					<th>Contraseña</th>
					
				</thead>
               @foreach ($categorias as $cat) 
				<tr>
					<td>{{ $cat->rut_conductor}}</td>
					<td>{{ $cat->patente}}</td>
					<td>{{ $cat->nombre_conductor}}</td>
					<td>{{ $cat->pass_conductor}}</td>
					
					<td>
						<a href="{{URL::action('ChoferController@edit',$cat->rut_conductor)}}"><button class="btn btn-info">Editar</button></a>
                          <a href="" data-target="#modal-delete-{{$cat->rut_conductor}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('acceso.chofer.modal')
				@endforeach
			</table>
		</div>
		{{$categorias->render()}}
	</div>
</div>

@endsection


