@extends('layouts.app')

@section('content')

<div class='row '>
        <div class='col s12'>
        <div>
            <h2 class='header'>Countries</h2>
            <span class="valign-wrapper"><button data-target="create" class=" waves-effect middle waves-light btn modal-trigger green darken-2 right">{{__('Add')}}<i class='material-icons left'>add</i></button></span>
        </div>
            <div class='card'>
                @if (session('status'))
                    <div class='alert alert-success' role='alert'>
                        {{ session('status') }}
                    </div>
                @endif
            <div class='card-stacked'>
                <div class='card-content'>
                    @if(count($countries))
                        <ul class='collection'>
                            @foreach($countries as $country)
                                <li class='collection-item avatar'>
                                    <img src='storage/img/flags/{{$country->flag}}' alt='' class='circle z-depth-1 responsive-img'>
                                    <span class='card-title flow-text green-text text-darken-2'><strong>{{__($country->name)}}</strong>
                                    <span class="badge">
                                    <button data-target="edit" class="btn modal-trigger"><i class='material-icons'>create</i></button>
                                    <button data-target="delete" class="btn modal-trigger red"><i class='material-icons'>delete</i></button></span>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>{{__('No Countries Found')}}</p>
                    @endif
                </div>
            </div>
            </div>
        </div>
</div>

<!-- Create Modal Structure -->
<div id='create' class='modal'><a href='#!' class='modal-close red lighten-1 waves-effect waves-red right'><i class='material-icons'>close</i></a>
    <div class='modal-content'>
        <h3 class='card-panel center'><strong>{{__('Add New Country')}}</strong></h3>
        <div class="row ">
            <div class="col s12">
            <h2 class="header">Create Country<a href="/countries" class="btn waves-effect waves-light right"> {{__("Back")}} <i class="material-icons left">arrow_back</i></a></h2>
                <div class="card-panel">
                    {!!Form::open(['route' => 'countries.store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                    {{ csrf_field() }}
                    @include('admin.location.formcountry')
                        <div class="modal-footer">
                            <button class="btn waves-effect waves-light" type="submit" name="action">{{__("Save")}}
                                <i class="material-icons right">save</i>
                            </button>
                            <button class="btn modal-close waves-effect waves-light" type="button">{{__("Close")}}
                                <i class="material-icons right">close</i>
                            </button>
                          </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal Structure -->
<div id='edit' class='modal'><a href='#!' class='modal-close red lighten-1 waves-effect waves-red btn-floating btn-small right'><i class='material-icons'>close</i></a>
    <div class='modal-content'>
        <h3 class='card-panel center'><strong>{{__('Edit Country')}}</strong></h3>
        <div class="row ">
            <div class="col s12">
            <h2 class="header">Create Country<a href="/countries" class="btn modal-close waves-effect waves-light right"> {{__("Back")}} <i class="material-icons left">arrow_back</i></a></h2>
                <div class="card-panel">
                    {!!Form::open(['route' => ['countries.update', 'test'], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                    {{ csrf_field() }}
                        @include('admin.location.formcountry')
                        <div class="modal-footer">
                            <button class="btn waves-effect waves-light" type="submit" name="action">{{__("Save")}}
                                <i class="material-icons right">save</i>
                            </button>
                            <button class="btn modal-close waves-effect waves-light" type="button">{{__("Close")}}
                                <i class="material-icons right">close</i>
                            </button>
                          </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
