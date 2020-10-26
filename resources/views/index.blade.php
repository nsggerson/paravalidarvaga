
@extends('templates.template')

@section('content')
    <div class="container" style="width: 60em; margin-top: 5%">

        <div class="card  text-center">
            <div class="card-header bg-primary  mb-3" style="color: white; font-size: 28px">
                <label for="">Sistema de compra de peças</label>
            </div>
            <div class="card-body">
                <form action="/">
                    <div class="form-group">
                        <label for="sel1">Escolha a marca do veiculo:</label>
                        <select class="form-control" id="sel1" name="sellist1" onchange="showModel(this)">
                            <option value="0">Marca...</option>
                            @foreach ($veiculos as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sel1">Lista de modelo:</label>
                        <div id="modelo">

                        </div>
                    </div>
                    <div class="form-group">
                        <div id="produtos">

                        </div>
                    </div>
                    <button type="submit"  class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection



