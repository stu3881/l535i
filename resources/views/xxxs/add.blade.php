@extends('layouts.main')

@section('content')
	<div id="admin">
		@if($errors->has())	
		<div id="form-errors">
			<p>The following errors have occurred:</p>
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error}}</li>
				@endforeach
			</ul>
		</div> <!-- end form-errors -->			
		@endif
	
		{{ Form::open(array('url'=>'admin/xxxs/create','method'=>'POST',)) }}
		<p>		
			{{ Form::label('name') }}
			{{ Form::text('name') }}
		</p>
		
		{{ Form::submit('Add Xxx', array('class'=>'tertiary-btn')) }}
		
		{{ Form::close() }}
		{{ Form::open(array('url'=>'admin/main','method'=>'GET',)) }}
		{{ Form::submit('Main menu', array('class'=>'tertiary-btn')) }}
		{{ Form::close() }}
		
	</div> <!-- end admin -->
	
	
@stop
