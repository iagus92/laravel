@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('home.dashboard') }}</div>

                <div class="panel-body">
                  <br>PRODUCTOS</br>
                  <a href='{{ url('search') }}'>Buscar</a>
                  <a href='{{ url('add') }}'>Añadir</a>
                  <a href='{{ url('price') }}'>Ordenar Precio</a>
                  @foreach ($products as $product)
                    <li><a href='{{ url('show',$product->id) }}'>{{ $product->name }}</a> - {{ $product->price }}€</li>
                  @endforeach
                  {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
