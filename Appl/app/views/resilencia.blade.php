@extends('plantilla')

@section('interfaz')
	@include('segment/interfaz')
@endsection

@section('menu')
	@include('segment/menu')
@endsection


@if(Session::get('valor'))	
	@section('centro')		
		{{ Session::get('total') }}
	@endsection
@else
	@section('centro')
		@include('modules/resilencia/mod_resilencia')
	@endsection		
@endif