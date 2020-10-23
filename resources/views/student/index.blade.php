@extends('master')
@section('header')
@section('title','Student')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto py-5">
			@foreach($students as $row)
				<p>{{$row->id}} | {{$row->rollno}} | {{$row->name}} | {{$row->phoneno}} | {{$row->email}} | {{$row->address}}</p>
			@endforeach
		</div>
	</div>
</div>
	
@endsection