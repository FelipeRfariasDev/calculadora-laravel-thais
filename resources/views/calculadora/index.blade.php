@extends('layouts.app')
@section('content')

<h1>Calculadora da Thaís</h1>
<form method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">Selecione a operação</label>
        </div>
        <div class="col-3">
            <select class="form-control" name="operacao" required>
                <option value="">Selecione um opção</option>
                <option value="soma">Soma</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
        </div>
        <div class="col-3">
            <button type="submit" class="btn btn-success">Calcular</button>
        </div>
    </div>
</form>


@endsection