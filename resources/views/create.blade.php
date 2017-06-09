@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('home.dashboard') }}</div>

                @if (count($errors) > 0)
                    <!-- Form Error List -->
                    <div class="alert alert-danger">
                        <strong>Whoops! Something went wrong!</strong>
                        <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="panel-body">
                  <br>AÑADIR PRODUCTO</br>
                  {{ Form::open(array('url' => 'add', 'method' => 'post', 'files' => true)) }}
                  {{ Form::text('name') }}
                  {{ Form::text('price') }}
                  {{ Form::file('image') }}
                  {{ Form::submit('Añadir') }}
                  {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
