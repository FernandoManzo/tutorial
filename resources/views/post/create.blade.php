@extends('layouts.app')

<h1 class="text-center mt-4">Welcome</h1>
@section('content')

	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form action=" {{ route('posts.store') }} " method="post">
		@csrf
		<div class="row justify-content-center">
			<div class="col-sm-7">
				<div class="form-group">
					<label for="title">Titulo</label>
					<input type="text" class="form-control" name="title" id="title" placeholder="Titulo"
					value="{{ old('title') }}">
				</div>
				<div class="form-group">
					<label for="content">Contenido</label>
					<textarea class="form-control" name="content" cols="30" rows="10">{{ old('title') }}</textarea>
				</div>
			</div>

			<div class="col-sm-7" text center>
				<button class="btn btn-primary btn-block" type="submit">Enviar</button>
			</div>
		</div>
	</form>
@endsection