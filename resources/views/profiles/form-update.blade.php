<div class="col-sm-12">
     <div class="form-group">
        <strong>Nome:</strong>
        {!! Form::text('name', auth()->user()->name, array('placeholder' => 'Nome', 'class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        <strong>E-mail:</strong>
        {!! Form::text('email', auth()->user()->email , array('placeholder' => 'E-mail','class' => 'form-control')) !!}
            </div>
        '
    <div class="form-group">
        <strong>Senha:</strong>
        {!! Form::password('password', array('placeholder' => 'Senha','class' => 'form-control')) !!}
    </div>
    
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
    </div>
</div>


 
