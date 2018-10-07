<div class="row">
    <div class="input-field col s12">
        {{Form::text('name', '', ['class' => 'validate', 'id' => 'name'])}}
        {{Form::label('name', 'Country name')}}
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        {{Form::text('iso2', '', ['class' => 'validate', 'id' => 'iso2'])}}
        {{Form::label('iso2', 'ISO2')}}
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        {{Form::text('iso3', '', ['class' => 'validate', 'id' => 'iso3'])}}
        {{Form::label('iso3', 'ISO3')}}
    </div>
</div>
<div class="row">
    <div class="input-field col s12">
        {{Form::text('phoneCode', '', ['class' => 'validate', 'id' => 'phoneCode'])}}
        {{Form::label('phoneCode', 'Phone Code +370')}}
    </div>
</div>
<div class="file-field input-field">
    <div class="btn">
    <span>File</span>
    {{Form::file('flag')}}
    </div>
    <div class="file-path-wrapper">
    <input class="file-path validate" type="text" placeholder="Country Flag">
    </div>
</div>