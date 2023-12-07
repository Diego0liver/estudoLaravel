<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $getAllProdut = Produtos::all();
     
     return $getAllProdut;
    }

    public function store(Request $request){
        $newProduto = new Produtos;
        $newProduto->nome = $request->nome;
        $newProduto->preco = $request->preco;

        $newProduto->save();
        if($newProduto){
            return $newProduto;
        }else{
        return response()->json([
             'mensagem' => 'algo deu errado'
        ], 500);
     }
    }

    public function updat(Request $request, $id){
        $updateProduto = Produtos::findOrFail($id);
        if($updateProduto){
        $updateProduto->update($request->all());
         return $updateProduto;
        }else{
            return response()->json([
                   'mensagem' => 'elgo de errado'
            ], 404);
        }
    }

    public function delet(string $id){
       $deletProduto = Produtos::destroy($id);
       if($deletProduto){
        return response()->json([
            'mensagem'=>'Item apagado com sucesso'
        ], 200);
       }else{
        return response()->json([
            'mensagem'=>'elgo de errado'
        ], 404);
       }

    }

    public function show(string $id){
      $getIdProduto = Produtos::findOrFail($id);
      if($getIdProduto){
        return $getIdProduto;
      }else{
        return response()->json([
            'mensagem'=>'elgo de errado'
        ], 404);
      }
    }

}
