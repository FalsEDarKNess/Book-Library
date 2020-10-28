@extends('master')
@section('header')
@section('title','Student')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto py-5">

			<p>Roll No: <span>{{$student->rollno}}</span></p>
			
			<p>Name: <span>{{$student->name}}</span></p>

        	<p>Email: <span>{{$student->email}}</span></p>

        	<p>Phoneno: <span>{{$student->phoneno}}</span></p>

        	<p>Address: <span>{{$student->address}}</span></p>
		</div>
	</div>
	
	@endsection