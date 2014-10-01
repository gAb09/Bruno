@extends('shared/views/layout')

@section('titre')
@parent
: les menus

@stop


@section('topcontent1')
		<h1 class="titrepage">Les menus</h1>
		<a href ="{{ URL::route('admin.menus.create') }}" class="badge badge-locale iconemedium add"
		style="font-size:1.1em">Ajouter un menu ou un item</a>
@stop


@section('topcontent2')
@stop


@section('contenu')

<hr />

@foreach ($menus as $menu)

@if ($menu->isRoot())

<!--Style différent selon que le menu est publié ou non-->
@if($menu->publication == 0)
<h2 class ="item muted">• {{ $menu->etiquette }} <small>(non publié) </small></h2>
	@else
	<h2 class ="item">• {{ $menu->etiquette }} </h2>
		@endif

		<p class="badge badge-locale iconesmall edit"><a href="{{ URL::to('admin/menus/'.$menu->id.'/edit') }}">Modifier ce menu</a></p>
		<p><strong>Rang = </strong>{{ $menu->rang }}</p>
		<p><strong>Description : </strong>{{ $menu->description }}</p>

		<!-- Formulaire gestion des rangs par menu-->
		{{ Form::open(array('url' => 'gestion/menu_items/rangs/'.$menu->id, 'method' => 'get')) }}
		<h4> Les items du menu {{ $menu->etiquette }} :</h4>
		<table>
			<thead>
				<th colspan = "2">Etiquette</th>
				<th>Actif</th>
				<th>Rang</th>
				<th>Route</th>
				<th>Description</th>
				<th>ID</th>
				<th>Nom système</th>
				<th>Modifier</th>
			</thead>

		
			@foreach(Menu::immediateDescSortByRang($menu) as $item) <!-- Liste des items -->

				@if($item->publication == 1)<tr>
				@else<tr class="muted">
				@endif
			
				<td colspan = "2" class ="gras" style="border-bottom-style:none">
					{{ $item->etiquette }}
				</td>

				@if($item->publication == 1)<td>Oui</td>
				@else<td>Non</td>
				@endif

				<td>
					{{ Form::text('rang_'.$item->id, $item->rang, array ('class' => 'input-td')) }}
				</td>
				<td>
					{{ $item->route }}
				</td>
				<td>
					{{ $item->description }}
				</td>
				<td>
					{{ $item->id }}
				</td>
				<td>
					{{ $item->nom_sys }}
				</td>
				<td>
					<a  class="iconemedium edit" href="{{ URL::to('admin/menus/'.$item->id.'/edit') }}">
					</a>
				</td>
			</tr>

			@foreach(Menu::immediateDescSortByRang($item) as $desc)  <!-- Liste des descendants -->
			@if($desc->getImmediateDescendants())

				@if($desc->publication == 1)<tr>
				@else<tr class="muted">
				@endif

				<td class ="before_niv2">
				</td>
				<td class="gras niv2">
					<small>{{ $desc->etiquette }}</small>
				</td>

				@if($desc->publication == 1)<td>Oui</td>
				@else<td>Non</td>
				@endif

				<td>
					{{ Form::text('rang_'.$desc->id, $desc->rang, array ('class' => 'input-mini')) }}
				</td>
				<td>
					{{ $desc->route }}
				</td>
				<td>
					{{ $desc->description }}
				</td>
				<td>
					{{ $desc->id }}
				</td>
				<td>
					{{ $desc->nom_sys }}
				</td>
				<td>
					<a  class="iconemedium edit" href="{{ URL::to('admin/menus/'.$desc->id.'/edit') }}">
					</a>
				</td>
			</tr>
			@endif
			@endforeach <!-- Fin foreach $desc -->


			@endforeach <!-- Fin foreach $item -->
			<tr>
				<td colspan="3"></td> <!-- "Espaceur" -->

				<td class="badge badge-locale iconesmall enr">
					Enregistrer tous les rangs
					{{ Form::close() }}
				</td>
			</tr>
		</table>

		<hr />

		@endif <!-- $menu->isRoot() ? -->
		@endforeach <!-- Fin foreach $menu -->

	</div>
	@stop