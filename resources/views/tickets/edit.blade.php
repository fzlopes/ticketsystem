@extends('adminlte::page')

@section('title', 'Editar Ticket')

@section('content')
    
<div class='col-sm-11'>
    <h2> Editar de Ticket </h2>
</div>
    
<div class='col-sm-1'>
    <a class="btn btn-primary" href="{{ route('tickets.index') }}"> Voltar</a>
</div>        
   
<div class="col-sm-12">  
    @include('includes.alerts')

    {!! Form::model($ticket, ['method' => 'PATCH', 'files' => true ,'route' => ['tickets.update', $ticket->id]]) !!} 
         @include('tickets.form-update')
    {!! Form::close() !!}
</div>
@stop