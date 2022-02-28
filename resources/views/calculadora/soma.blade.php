@extends('layouts.app')
@section('content')

<h1>Calculadora da Thaís (Somar)</h1>
<form method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row g-3 align-items-center">
        <div class="col-3">
            Valor1 <input type="text" name="valor1" required> 
            <br><br>
            Valor2 <input type="text" name="valor2" required>
        </div>
        <div class="col-3">
            <button type="submit" class="btn btn-success">Calcular</button>
        </div>
    </div>
    {{$msg}}
</form>
@endsection