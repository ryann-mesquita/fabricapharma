@extends('adminlte::page')

@section('title', 'Groups')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item" ><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item" ><a href="{{ route('groups.index') }}" class="active">Groups</a></li>
    </ol>
    <h1>Groups <a href="{{ route('groups.create') }}" class="btn btn-dark"><i class="fas fa-plus-square"></i> ADD</a></h1>
@stop

@section('content')

    <div class="card">
        <div class = "card-header">
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Grupo</th>
                        <th width="150">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($groups as $group)
                        <tr>
                            <td>
                                {{ $group->id }}
                            </td>
                            <td>
                                {{ $group->name }}
                            </td>
                            <td style="width=10px;">
                                <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('groups.show', $group->id) }}" class="btn btn-warning">VER</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card footer">
            @if(isset($filters))
            {!! $groups->appends($filters)->links() !!}
            @else
            {!! $groups->links() !!}
            @endif
        </div>
    </div>

@stop