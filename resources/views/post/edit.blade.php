@extends('layouts.app')


@if(Session::has('message'));
	<div class="container alert alert-success">
			{{ Session::get('message') }}
	</div>
@endif

@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

@section('content')
	<form action=" {{ route('posts.update', ['post' => $post]) }} " method="post">
		@method('PUT')
		@csrf
		<div class="row justify-content-center">
			<div class="col-sm-7">
				<div class="form-group">
					<label for="title">Titulo</label>
					<input type="text" class="form-control" name="title" id="title" placeholder="Titulo"
					value="{{ $post->title }}">
				</div>
				<div class="form-group">
					<label for="content">Contenido</label>
					<textarea class="form-control" name="content" cols="30" rows="10">{{ $post->title }}</textarea>
				</div>
			</div>

			<div class="col-sm-7" text center>
				<button class="btn btn-primary btn-block" type="submit">Enviar</button>
			</div>
		</div>
	</form>
@endsection