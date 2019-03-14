@extends('layouts.master')
@section('head.title')
	Danh sách
@stop
@section('body.content')
	<h4><a href="create">Create</a></h4>
	<table>
		<thead>
			<th>Id</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Show</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		@foreach ($user as $users)
		<tr>
			<td>{{$users->id}}</td>
			<td>{{$users->name}}</td>
			<td>{{$users->phone}}</td>
			<td>{{$users->email}}</td>
			<td>{{$users->gender}}</td>
			<td>{{$users->address}}</td>
			<td><a href="{{ route('customers.edit', $users->id) }}">Show</a></td>
			<td><a href="{{ route('customers.edit', $users->id) }}">Edit</a></td>
			<td><a href="{{ route('customers.destroy', $users->id) }}">delete</a></td>
		</tr>
		@endforeach			
@stop