@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('home.dashboard') }}</div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="panel-body">
                  <a href='{{ url('add') }}'>
                    <button class="btn btn-success">
                      <i class="fa fa-trash"></i> Añadir
                    </button>
                  </a>
                  <a href='{{ url('search') }}'>
                    <button class="btn btn-success">
                      <i class="fa fa-trash"></i> Buscar
                    </button>
                  </a>
                  <a href='{{ url('price') }}'>
                    <button class="btn btn-success">
                      <i class="fa fa-trash"></i> Ordenar por precio
                    </button>
                  </a>

                  <br>LISTA PRODUCTOS</br>
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
