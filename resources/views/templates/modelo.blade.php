<div class="form-group">
    <select class="form-control" id="sel1" name="sellist1" onchange="showProdutos(this)">
        <option value="0">Modelo...</option>
        @foreach ($modelos as $value)
            <option value="{{ $value->id }}">{{ $value->name }}</option>
        @endforeach
    </select>
</div>
