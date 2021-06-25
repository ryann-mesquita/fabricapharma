@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome</label>
    <input type="text" name="name" class="form-control" placeholder="Descrição do Grupo:" value="{{ $group->name ?? old('name') }}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
