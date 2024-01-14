<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CantoController extends Controller
{
    public function getAll(){
      $getAllContao = Contato::select('*')
        ->whereIn('salario', function ($query) {
          $query->select('salario')
              ->from('contato')
              ->groupBy('salario')
              ->havingRaw('count(*) > 1');
      })->get();
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
        Log::channel('contato')->info('novo contato chamdo ' . $newContato->nome . ' foi adiocionado');
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

  public function store(string $id){
    $getIdProduto = Contato::findOrFail($id);
      return view('layout.getIdContato', compact('getIdProduto'));
  }

  public function deleteContato(string $id)
  {
    $deletLog = Contato::find($id);
    if($deletLog){
      $nomeDocontatoDeletado = $deletLog->nome;
      $deletLog->delete();
      Log::channel('contato')->info('Contato ' . $nomeDocontatoDeletado . ' foi deletado');
    return redirect()->route('layout.logg');
  }
  }

}
