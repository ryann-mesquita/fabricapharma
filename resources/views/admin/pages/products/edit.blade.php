@extends('adminlte::page')

@section('title', "Editar o produto {$product->name}")

@section('content_header')
    <h1> Editar o Produto {{$product->name}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
           <form action="{{  route('products.update', $product->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.products._partials.form')
            </form> 
        </div>
    </div>
@endsection