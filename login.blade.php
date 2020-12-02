@extends('layouts.master')
@section('title')
@section('header')
@stop 
@section('navbar')
@show
@section('contenido') <center>
<form action="{{action('Tim@validarLogin')}}" method="get">
{{csrf_field()}}
<label for="user">Usuario</label>
<input type="text" name="user">
<br>
<label for="password">Password</label>
<input type="password" name="password">
<br>
<label for="key">Key</label>
<input type="text" name="key">
<br>
<input type="submit" value="submit">
</form></center>
@stop
@section('footer')
@parent
@stop
