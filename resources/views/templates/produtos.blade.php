<label for="sel1">Lista de Produto:</label>
<div class="form-group">
    <select class="form-control" id="sel1" name="sellist1" onchange="">
        <option value="0">Produtos...</option>
        @foreach ($produtos as $value)
            <option value="{{ $value->id }}">{{ $value->name }}</option>
        @endforeach
    </select>
</div>
