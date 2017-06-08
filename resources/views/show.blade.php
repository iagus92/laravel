@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('home.dashboard') }}</div>

                <div class="panel-body">
                  <br>PRODUCTO</br>
                    {{ $product->name }}</a> - {{ $product->price }}€
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
