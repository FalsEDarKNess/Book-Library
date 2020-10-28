@extends('master')
@section('header')
@section('title','Student')

<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-10 mx-auto py-5">
			<div class="col-md-12">
				<a href="{{route('student.create')}}" class="btn btn-info">Add New</a>
			</div>
				<table>
					<thead>
						<tr>
						<th>No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phoneno</th>
						<th>Action</th>
						</tr>
					</thead>
					<tbody>
					@php
					$i=1;
					@endphp
					@foreach($students as $row)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$row->name}}</td>
						<td>{{$row->email}}</td>
						<td>{{$row->address}}</td>
						<td>{{$row->phoneno}}</td>
						<td>
							<a href="{{route('student.edit',$row->id)}}" class="btn btn-warning btn-sm">Edit</a>
							<form method="post" action="{{route('student.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
							@csrf
							@method('DELETE')
							<input type="submit" name="btnsubmit" class="btn btn-danger btn-sm" value="Delete">
							</form>
							<a href="{{route('student.show',$row->id)}}" class="btn btn-primary btn-sm">Detail</a>
						</td>
					</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	@endsection