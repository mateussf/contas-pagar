<?php

namespace App\Http\Controllers;

use Request;
use Validator;
use Illuminate\Support\Facades\DB;

use App\Models\ContasPagarModel;
use Nette\Utils\Validators;

class ContasPagarController extends Controller
{
    public function Listar(){
        //$contas_pagar = DB::select('select * from contas_pagar');

        $contas_pagar = ContasPagarModel::all();

        return view('listar')->with('contas_pagar', $contas_pagar);
    }

    public function cadastro(){
        return view('cadastro');
    }

    public function editar($id){
        $contas_pagar = ContasPagarModel::find($id);

        if (empty($contas_pagar)){
            return "Conta pagar não existe";
        }else{
            return view('editar')->with('contas_pagar', $contas_pagar);
        }
    }

    public function update($id){
        $descricao = Request::input('descricao', '');
        $valor = Request::input('valor', '0');


        $contas_pagar = ContasPagarModel::find($id);
        $contas_pagar->descricao = $descricao;
        $contas_pagar->valor = $valor;
        $contas_pagar->save();

        return redirect()->route('contas.listar')->withInput();

    }

    public function apagar($id){
        $contas_pagar = ContasPagarModel::find($id);
        $contas_pagar->delete();

        return redirect()->route('contas.listar');
    }

    public function salvar(){
        $descricao = Request::input('descricao', '');
        $valor = Request::input('valor', '0');

        $validator = Validator::make(
            [
                "descricao" => $descricao,
                "valor" => $valor
            ],
            [
                "descricao" => "required|min:6",
                "valor" => "required|numeric"
            ],
            [
                'required' => ':attribute é obrigatório',
                'numeric' => ':attribute é necessário ser numérico',
                'min' => ':attribute é necessário ter :min  caracteres'
            ]
        );

        if ($validator->fails()){
            return redirect()->route('contas.cadastrar')->withErrors($validator)->withInput();
        }

        //DB::insert('insert into contas_pagar (descricao, valor) values (?, ?)', [$descricao, $valor]);
        $contas_pagar = new ContasPagarModel();
        $contas_pagar->descricao = $descricao;
        $contas_pagar->valor = $valor;
        $contas_pagar->save();

        return redirect()->route('contas.listar')->withInput();
    }
}
