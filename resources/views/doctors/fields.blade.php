<!-- Ape Nombr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ape_nombr', 'Ape Nombr:') !!}
    {!! Form::text('ape_nombr', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Dni Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dni', 'Dni:') !!}
    {!! Form::number('dni', null, ['class' => 'form-control']) !!}
</div>

<!-- Especialidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    {!! Form::text('especialidad', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>