@extends('master')
@section('header')
@section('title','Student')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto py-5">
			<div class="col-md-12">
				<a href="{{route('student.create')}}" class="btn btn-info">Add New</a>
			</div>
			@foreach($students as $row)
				<p>
				<form method="post" action="{{route('student.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
					@csrf
					@method('DELETE')
					<input type="submit" name="btnsubmit" class="btn btn-danger" value="Delete">
				</form>
				{{$row->id}} | {{$row->rollno}} | {{$row->name}} | {{$row->phoneno}} | {{$row->email}} | {{$row->address}}</p>
			@endforeach
		</div>
	</div>
</div>
	
@endsection