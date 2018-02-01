@extends('adminlte::page')

@section('title', 'Cadastrar Contrato')

@section('content')

<div class='col-sm-11'>
    <h2> Cadastrar Contrato </h2>
</div>
    
<div class='col-sm-1'>
    <a class="btn btn-primary" href="{{ route('contracts.index') }}"> Voltar</a>
</div>        

<div class="col-sm-12">  
    @include('includes.alerts')

    {!! Form::open(array('route' => 'contracts.store','method'=>'POST')) !!}
         @include('contracts.form-create')
    {!! Form::close() !!}
</div>
@stop