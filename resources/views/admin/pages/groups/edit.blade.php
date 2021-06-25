@extends('adminlte::page')

@section('title', "Editar o produto {$group->name}")

@section('content_header')
    <h1> Editar o Grupo {{$group->name}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
           <form action="{{  route('groups.update', $group->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.groups._partials.form')
            </form> 
        </div>
    </div>
@endsection