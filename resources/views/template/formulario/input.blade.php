
<div class="form-group row">
    <label class='{{ $class ?? null }}'>{{ $label ?? $input ?? "Erro"}}</label>
    <div class="col-sm-10">
    {!! Form::text($input, $value ?? null, $attributes) !!}
    </div>
</div>