@extends('layout')

@section('title', "Usuario {$id}")

@section('content')
<br><br><br>
		<h1>{{ $title }}</h1>

		<ul>
			@forelse ($users as $user)
				<li>{{ $user }}</li>
			@empty
				<li>No hay usuarios registrados.</li>
			@endforelse
		</ul>
@endsection

@section('sidebar')
	@parent

		<h2>Barra lateral personalizada</h2>

@endsection



<!-- /*@empty($users)
	<p>No hay usuarios registrados.</p>


@else
	<ul>
		@foreach ($users as $user)
			<li>{{ $user }}</li>
		@endforeach
	</ul>
	
@endempty*/-->





<!-- /*@unless (empty($users))
	<ul>
		@foreach ($users as $user)
			<li>{{ $user }}</li>
		
		@endforeach
	</ul>

@else
	<p>No hay usuarios registrados.</p>
@endif*/-->
	
<!--	<ul>
	<?php foreach ($users as $user): ?>
		<li><?= e($user) ?></li>
	<?php endforeach; ?>
	
	</ul>
-->

<!--	<ul>
	<?php foreach ($users as $user): ?>
		<li>{{ $user }}</li>
	<?php endforeach; ?>
	
	</ul>
-->
