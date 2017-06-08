@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('home.dashboard') }}</div>

                {{ $errors->create }}

                <div class="panel-body">
                  <br>AÑADIR PRODUCTO</br>
                  {{ Form::open(array('url' => 'add', 'method' => 'post')) }}
                  {{ Form::text('name') }}
                  {{ Form::text('price') }}
                  {{ Form::submit('Añadir') }}
                  {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
