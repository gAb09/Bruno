@extends('frontend/views/layout')

@section('titre')
@parent
: les menus - création

@stop


@section('topcontent1')
		<h1 class="titrepage">Création d’un item de menu</h1>
@stop


@section('topcontent2')
@stop


@section('contenu')


	{{ Form::open(array('url' => URL::to('backend/menus'), 'method' => 'post')) }}

@include('backend/menus/form')

	<br />{{ Form::submit('Créer', array('class' => 'btn')) }}
	{{ Form::close() }}

@stop

@section('footer')
@parent
<h3>  Le footer de menus</h3>

@stop