<div class="file-field input-field">
    <div class="btn">
        {{Form::file($name)}}
    </div>
    <div class="file-path-wrapper">
        {{Form::text($name, $value, $attributes)}}
    </div>
</div>