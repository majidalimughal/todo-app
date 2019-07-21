@extends('layouts.app')


@section('content')

<h1 class="text-center my-5">Create Todos</h1>

<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card card-default">
			<div class="card-header">Todo</div>
			<div class="card-body">
				@if($errors->any())
				<div class="alert alert-danger ">
					<ul class="list-group">
					@foreach($errors->all() as $error)
					
						<li class="list-group-item">{{$error}}</li>
					
					@endforeach
					</ul>
				</div>
				@endif
				<form action="/store-todo" method="POST" class="form">
					@csrf
					<div class="form-group">
						<label>Name:</label>
						<input type="text" name="name" class="form-control" >
					</div>
					<div class="form-group">
						<label>Description:</label>
						<textarea name="description" rows="5" class="form-control" ></textarea>
					</div>
				
			</div>
			<div class="card-footer">
				<button type="submit" class="float-right btn btn-primary">Create</button>
			</div></form>
		</div>
	</div>
</div>

@endsection