@extends('adminlte::page')

@section('title', "Detalhes do Produto {$product->description}")

@section('content_header')
    <h1> Detalhes do Produto <b>{{ $product->description}}</b>  </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome :</strong> {{ $product->description }}
                </li>
                <li>
                    <strong>Apresentação :</strong> {{ $product->apresentation }}
                </li>
                <li>
                    <strong>Grupo :</strong> {{ $product->group }}
                </li>
            </ul>
            <form action="{{ route('products.delete', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Deletar o Plano {{ $product->description }}</button>
            </form>
        </div>
    </div>
@endsection

