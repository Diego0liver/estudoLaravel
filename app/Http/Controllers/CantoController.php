<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class CantoController extends Controller
{
    public function getAll(){
        $getAllContao = Contato::all();
        return $getAllContao;
    }
    public function formContatos(){
      return view('layout.Contato');
    }
    public function create(Request $request){
      try {
        $request->validate([
            'nome' => 'required',
            'salario' => 'required',
            'idade' => 'required',
            'telefone' => 'required',
            'CPF' => 'required',
        ]);

        $newContato = new Contato;
        $newContato->nome = $request->nome;
        $newContato->salario = $request->salario;
        $newContato->idade = $request->idade;
        $newContato->telefone = $request->telefone;
        $newContato->CPF = $request->CPF;

        $newContato -> save();

        if ($newContato) {
            $message = 'Sucesso ao cadastrar Bens.';
            $code = 'success';
        }
    } catch (\Throwable $th) {
       $message = 'Erro ao cadastrar Bens.';
       $code = 'danger';
       return redirect()->route('formContatos')->withErrors($th->validator)->with(['message' => $message, 'code' => $code]);
    }
    return redirect()->route('formContatos')->with(['message' => $message, 'code' => $code]);
  }
}
