<div class="col-sm-12">
     <div class="form-group">
        <strong>Número:</strong>
        {!! Form::text('number', null, array('placeholder' => 'Número do Contrato','class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <strong>Horas:</strong>
        {!! Form::text('hours', null, array('placeholder' => 'Número de Horas do Contrato','class' => 'form-control')) !!}
    </div>
    
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </div>
</div>

