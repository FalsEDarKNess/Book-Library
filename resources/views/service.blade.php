@extends('master')
@section('header')
@section('title','Service')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto py-5">
			@foreach($a as $row)
			<p>Name: {{$row['name']}}</p>
			<p>Age: {{$row['age']}}</p>
			@endforeach
		</div>
	</div>
</div>
	
@endsection