@extends('layouts.master')
@section('head.title')
asdajskldjaskldjaskldkl
@stop
@section('body.content')
<tr>
	<p>Id : <td>{{$user->id}}</td></p>
	<p>Name : <td>{{$user->name}}</td></p>
	<p>Phone : <td>{{$user->phone}}</td></p>
	<p>Email : <td>{{$user->email}}</td></p>
	<p>Gender : <td>{{$user->gender}}</td></p>
	<p>Address : <td>{{$user->address}}</td></p>
</tr>
@stop