<?php

namespace App\Http\Controllers;

class CalculadoraController extends Controller
{
    public function index(){

        if($_POST){
            $operacao = $_POST["operacao"];
        
            if($operacao=="soma"){
                return redirect('calculadora/soma');
            }
        }

        return view('calculadora.index', []);
    }

    public function soma(){

        $msg = "";

        if($_POST){

            $v1 = $_POST["valor1"];
            $v2 = $_POST["valor2"];
        
            $total = ($v1+$v2);
        
            $msg = "O resultado somando os dois valores é: ".$total;
        }
        return view('calculadora.soma', ["msg"=>$msg]);
    }
}