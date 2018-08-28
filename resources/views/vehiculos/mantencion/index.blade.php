@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado Vehículos <a href="mantencion/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('vehiculos.mantencion.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Patente</th>
					<th>Fecha</th>
					<th>Kilometraje</th>
				</thead>
               @foreach ($categorias as $cat) 
				<tr>
					<td>{{ $cat->patente}}</td>
					<td>{{ $cat->fecha}}</td>
					<td>{{ $cat->kilometraje}}</td>
					<td>
						<a href="{{URL::action('MantencionController@edit',$cat->patente)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$cat->patente}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('vehiculos/mantencion.modal')
				@endforeach
			</table>
		</div>
		{{$categorias->render()}}
	</div>
</div>

@endsection


