@extends('adminlte::page')

@section('title', 'Cadastrar Contrato')

@section('content')

<div class='col-sm-11'>
    <h2> Cadastrar de Contrato </h2>
</div>
    
<div class='col-sm-1'>
    <a class="btn btn-primary" href="{{ route('contracts.index') }}"> Voltar</a>
</div>        

<div class="col-sm-12">  
    @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(array('route' => 'contracts.store','method'=>'POST')) !!}
         @include('contracts.form')
    {!! Form::close() !!}
</div>
@stop