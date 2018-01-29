@extends('adminlte::page')

@section('title', 'Cadastrar Ticket')

@section('content')

<div class='col-sm-11'>
    <h2> Cadastrar Ticket </h2>
</div>
    
<div class='col-sm-1'>
    <a class="btn btn-primary" href="{{ route('tickets.index') }}"> Voltar</a>
</div>        

<div class="col-sm-12">  
    @include('includes.alerts')
    
    {!! Form::open(array('route' => 'tickets.store','method'=>'POST', 'files' => true)) !!}
         @include('tickets.form')
    {!! Form::close() !!}
</div>
@stop