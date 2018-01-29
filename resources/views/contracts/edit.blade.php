@extends('adminlte::page')

@section('title', 'Editar Contrato')

@section('content')
    
<div class='col-sm-11'>
    <h2> Editar de Contrato </h2>
</div>
    
<div class='col-sm-1'>
    <a class="btn btn-primary" href="{{ route('contracts.index') }}"> Voltar</a>
</div>        
   
<div class="col-sm-12">  
    @include('includes.alerts');

    {!! Form::model($contract, ['method' => 'PATCH','route' => ['contracts.update', $contract->id]]) !!}
        @include('contracts.form')
    {!! Form::close() !!}
</div>
@stop