<!-- Apellido Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('apellido_nombre', 'Apellido Nombre:') !!}
    <p>{{ $usuario->apellido_nombre }}</p>
</div>

<!-- Usuario Field -->
<div class="col-sm-12">
    {!! Form::label('usuario', 'Usuario:') !!}
    <p>{{ $usuario->usuario }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $usuario->password }}</p>
</div>

