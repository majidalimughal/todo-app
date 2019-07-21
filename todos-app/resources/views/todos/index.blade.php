@extends('layouts.app')

@section('title')
Todo List
@endsection

@section('content')
<h1 class="text-center my-3">TODOS Page</h1>
<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card card-default">
	<div class="card-header">Todos</div>
	<div class="card-body">
		@foreach($todos as $todo)
		<ul class="list-group">
			<li class="list-group-item my-1">{{$todo->name}}
				<a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm float-right"><b>Delete</b></a>
				<a href="/todos/{{$todo->id}}/" class="btn btn-secondary btn-sm float-right mx-2"><b>View</b></a>
				@if(!$todo->completed)
				<a href="/todos/{{$todo->id}}/complete" class="btn btn-warning mx-2 btn-sm float-right" style="color: white;"><b>Complete</b></a>
				@endif

			</li>
		</ul>
		@endforeach
	</div>
</div>
	</div>
</div>
@endsection
