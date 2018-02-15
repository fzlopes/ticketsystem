@extends('adminlte::page')

@section('title', 'Meu Perfil')

@section('content')
    
<div class='col-sm-11'>
    <h2> Meu Perfil </h2>
</div>
    
<div class="col-sm-12">  
    @include('includes.alerts')

    {!! Form::open(array('route' => 'profiles.store','method'=>'POST')) !!}
            @include('profiles.form-update')
    {!! Form::close() !!}
</div>
@stop