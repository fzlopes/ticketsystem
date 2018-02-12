@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <h4>Você está logado como <b>{{ auth()->user()->name }}<b></h4>
@stop