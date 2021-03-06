@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('home.dashboard') }}</div>

                <div class="panel-body">
                  <br>PRODUCTO</br>
                    <div>{{ $product->name }} - {{ $product->price }}€</div>
                    
                    <a href='{{ url('edit',$product->id) }}'>
                      <button class="btn btn-success">
                        <i class="fa fa-trash"></i> Editar
                      </button>
                    </a>

                    <form action="{{ url('delete/'.$product->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i> Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
