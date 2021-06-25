@extends('adminlte::page')

@section('title', "Detalhes do Grupo {$group->name}")

@section('content_header')
    <h1> Detalhes do Grupo <b>{{ $group->name}}</b>  </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome :</strong> {{ $group->name }}
                </li>
            </ul>
            <form action="{{ route('groups.delete', $group->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Deletar o Grupo {{ $group->name }}</button>
            </form>
        </div>
    </div>
@endsection

