@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado Vehículos con Alertas<a href="aumento/create"></a></h3>
		
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Patente</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Tipo de Neumatico</th>
					<th>aro</th>
					<th>Tipo de Combustible</th>
					<th>Kilometraje</th>
				</thead>

               @foreach ($categorias as $cat) 
               @if($cat->kilometraje =='10000')
			<tr>
					<td>{{ $cat->patente}}</td>
					<td>{{ $cat->id_marca}}</td>
					<td>{{ $cat->modelo}}</td>
					<td>{{ $cat->tipo_neumatico}}</td>
					<td>{{ $cat->aro}}</td>
					<td>{{ $cat->tipo_combustible}}</td>
					<td>{{ $cat->kilometraje}}</td>
					<td>						<a href="{{URL::action('AumentoController@edit',$cat->patente)}}"><button class="btn btn-info">Reset Km</button></a>

                        
					</td>
				</tr>
				@include('vehiculos/aumento.modal')
				@endif
			
				@endforeach
			</table>
		</div>
		{{$categorias->render()}}
	</div>
</div>

@endsection


