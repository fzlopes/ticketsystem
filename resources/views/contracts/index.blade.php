@extends('adminlte::page')

@section('title', 'Contrato')

@section('content')
    
<div class='col-sm-11'>
    <h2> Contratos </h2>
</div>

<div class='col-sm-1'>
    <a href='{{route('contracts.create')}}' class='btn btn-primary' 
       role='button'> Novo </a>
</div>
    
    @if ($message = Session::get('success'))
    <div class="col-sm-12">
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    </div>
    @endif
    
 <div class='col-sm-12'>
    <table class="table table-hover">
        <tr>
            <th>#</th>
            <th>Usuário</th>
            <th>Número</th>
            <th>Horas</th>
            <th width="280px">Acões</th>
        </tr>
    @forelse ($contracts as $contract)
    <tr>
        <td>{{ $contract->id }}</td>
        <td>{{ $contract->user->name}}</td>
        <td>{{ $contract->number}}</td>
        <td>{{ $contract->hours}}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('contracts.edit',$contract->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['contracts.destroy', $contract->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @empty
        <p class="alert alert-danger">Nenhum contrato cadastrado.<p>
    @endforelse
    </table>
    {!! $contracts->links() !!}
</div>    
@stop



