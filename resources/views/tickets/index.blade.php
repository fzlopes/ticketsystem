@extends('adminlte::page')

@section('title', 'Ticket')

@section('content')
    
<div class='col-sm-11'>
    <h2> Tickets </h2>
</div>

<div class='col-sm-1'>
    <a href='{{route('tickets.create')}}' class='btn btn-primary' 
       role='button'> Novo </a>
</div>
    
 @include('includes.alerts')
    
 <div class='col-sm-12'>
    <table class="table table-hover">
        <tr>
            <th>#</th>
            <th>Usuário</th>
            <th>Status</th>
            <th>Problema</th>
            <th>Foto</th>
            <th width="280px">Acões</th>
        </tr>
    @forelse ($tickets as $ticket)
    <tr>
        <td>{{ $ticket->id }}</td>
        <td>{{ $ticket->user->name}}</td>
        <td>{{ $ticket->status }}</td>
        <td>{{ $ticket->problem}}</td>
        <td>{{ $ticket->photo}}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('tickets.edit',$ticket->id) }}">Editar</a>
            {!! Form::open(['method' => 'DELETE','route' => ['tickets.destroy', $ticket->id],'style'=>'display:inline', 'onsubmit' => "return confirm('Confirma Exclusão?')"]) !!}
            {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @empty
        <p class="alert alert-warning">Nenhum ticket cadastrado.<p>
    @endforelse
    </table>
    {!! $tickets->links() !!}
</div>    
@stop



