<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoReq;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
    // $getAllProdut = Produtos::all();
    $getAllProdut = Produtos::paginate(5);

     return view('welcome', ['getAllProdut'=>$getAllProdut]);
    }


    public function produto_store(ProdutoReq $request){
        $newProduto = new Produtos;
        $newProduto->nome = $request->nome;
        $newProduto->preco = $request->preco;

        // $request->validate([
        //    'nome' => 'required|min:3',
        //    'preco' => 'required|max:3'
        // ]);

        $newProduto->save();
        if($newProduto){
        // return $newProduto; <- retorno caso for uma api
        return redirect()->route('home')->with('sucesso', 'Formulario enviado com sucesso');
        }else{
        return response()->json([
             'mensagem' => 'algo deu errado'
        ], 500);
     }
    }

    public function produto_updat(Request $request, $id){
        $updateProduto = Produtos::findOrFail($id);
        if($updateProduto){
        $updateProduto->update($request->all());
        return redirect()->route('home')->with('update', 'item atualizado com sucesso');;
        }else{
            return response()->json([
                   'mensagem' => 'elgo de errado'
            ], 404);
        }
    }

    public function produto_delet(string $id){
       $deletProduto = Produtos::destroy($id);
       if($deletProduto){
        // return response()->json([
        //     'mensagem'=>'Item apagado com sucesso'
        // ], 200); <- retorno caso for API
       return redirect()->route('home')->with('delet', 'item deletado com sucesso');
       }else{
        return response()->json([
            'mensagem'=>'elgo de errado'
        ], 404);
       }

    }

    public function produto_show(string $id){
      $getIdProduto = Produtos::findOrFail($id);
      if($getIdProduto){
        return view('layout.edit', ['getIdProduto'=>$getIdProduto]);
      }else{
        return response()->json([
            'mensagem'=>'elgo de errado'
        ], 404);
      }
    }

    public function produto_form(){
        return view('layout.form');
      }

}
