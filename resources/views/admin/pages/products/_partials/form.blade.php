@include('admin.includes.alerts')

<div class="form-group">
    <label>Descrição</label>
    <input type="text" name="description" class="form-control" placeholder="Descrição do Produto:" value="{{ $product->description ?? old('description') }}">
</div>
<div class="form-group">
    <label>Apresentation</label>
    <input type="text" name="apresentation" class="form-control" placeholder="Apresentação do Produto:" value="{{ $product->apresentation ?? old('apresentation') }}">
</div>
<div class="form-group">
    <label>Grupo</label>
    <input type="text" name="group" class="form-control" placeholder="Grupo" value="{{ $product->group ?? old('group') }}">
</div>
<div class="form-group">
    <label>Classificação</label>
    <input type="text" name="classification" class="form-control" placeholder="Classificação" value="{{ $product->classification ?? old('classification')}}">
</div>
<div class="form-group">
    <label>Categoria</label>
    <input type="text" name="category" class="form-control" placeholder="Categoria" value="{{ $product->category ?? old('category') }}">
</div>
<div class="form-group">
    <label>Fornecedor</label>
    <input type="text" name="manufacturer" class="form-control" placeholder="Fornecedor" value="{{ $product->manufacturer ?? old('manufacturer') }}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>
