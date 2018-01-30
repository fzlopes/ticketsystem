<div class="col-sm-12">
    <div class="form-group">
        <strong>Status:</strong>
        {!! Form::label('ativo', 'Ativo', array('class' => 'control-label' )) !!} 
        {!! Form::radio('status', 'Ativo', true) !!}
        {!! Form::label('resolvido', 'Resolvido', array('class' => 'control-label' )) !!} 
        {!! Form::radio('status', 'Resolvido') !!}
    </div>

    <div class="form-group">
        <strong>Problema:</strong>
    {!! Form::textarea('problem', null, array('placeholder' => 'Descrição do problema','class' => 'form-control')) !!}
    </div>
    
    <div class="form-group">
        <strong>Foto:</strong>
        {!! Form::file('photo', null, array('class' => 'form-control')) !!}
    </div>
    
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </div>
</div>

