@extends('welcome')

@section('title', "Vista titulo")


@section('content')
	<p>Hola</p>
@endsection

@section('sidebar')
	@parent
	<h3>View Siderbar</h3>
@endsection