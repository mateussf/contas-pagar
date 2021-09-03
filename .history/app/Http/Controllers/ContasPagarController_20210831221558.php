<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContasPagarController extends Controller
{
    public function Listar(){
        $contas_pagar = DB::select('select * from contas_pagar');
        $html = "";
        foreach ($contas_pagar as $value){
            $html  = 'Nome: ' . $value->descricao . "<br>";
            $html  .= 'Valor: ' . $value->valor . "<br>";
        }

        return $html;
    }
}
