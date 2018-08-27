<!--<div class="form-group">

    {{Form::text('name', '', ['class' => 'validate', 'id' => 'name'])}}
        {{Form::label('name', 'Country name')}}
</div>-->


<div class='row'>
    <div class='input-field col s12'>
        {{ Form::label($name, null, ['class' => 'control-label']) }}
        {{ Form::bstext($name, $value, array_merge(['class' => 'validate', 'id' => '$name'], $attributes)) }} 
    </div>
</div>