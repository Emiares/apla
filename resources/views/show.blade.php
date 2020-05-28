@extends('layout')

@section('title', "Usuario {$id}")

@section('content')
			<h1>Usuarios #{{ $id }}</h1>

			Mostrando detalle del usuario: {{ $id }}

@endsection