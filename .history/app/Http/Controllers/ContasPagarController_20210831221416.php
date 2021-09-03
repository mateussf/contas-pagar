<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContasPagarController extends Controller
{
    public function Listar(){
        $contas_pagar = DB::select('select * from contas_pagar');

        return "ok";
    }
}
