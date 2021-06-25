@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item" ><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item" ><a href="{{ route('products.index') }}" class="active">Products</a></li>
    </ol>
    <h1>Products <a href="{{ route('products.create') }}" class="btn btn-dark"><i class="fas fa-plus-square"></i> ADD</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('products.search') }}" method="POST" class="form form-inline">
                @csrf
                
                <input type="text" name="filter" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                <button type="submit" class="btn btn-dark">Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Descrição</th>
                        <th width="150">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                {{ $product->id }}
                            </td>
                            <td>
                                {{ $product->description }}
                            </td>
                            <td style="width=10px;">
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-warning">VER</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card footer">
            @if(isset($filters))
            {!! $products->appends($filters)->links() !!}
            @else
            {!! $products->links() !!}
            @endif
        </div>
    </div>
@stop


@section('js')
    
@stop