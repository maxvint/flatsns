@extends('layout.application')

@section('content')
    @foreach($users as $user)
    	<p>{{ $user->username }}</p>
    @endforeach
@stop