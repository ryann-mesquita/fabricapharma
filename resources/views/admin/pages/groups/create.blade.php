@extends('adminlte::page')

@section('title', 'Cadastrar Novo Grupo')

@section('content_header')
    <h1> Cadastrar Novo Grupo </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
           <form action="{{  route('groups.store') }}" class="form" method="POST">
                @csrf
                @include('admin.pages.groups._partials.form')
            </form> 
        </div>
    </div>
@endsection