<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConteectController extends Controller
{
    public function index(){
       return view('components.index');
    }

    public function store(Request $req){
   $emailOk= Mail::to('diego@hotmail.com', 'Diego')->send(new Contact([
        'fromName' => $req->input('nome'),
        'fromEmail' => $req->input('email'),
        'subject' => $req->input('assunto'),
        'message' => $req->input('message')
       ]));
       if($emailOk){
      return redirect()->route('app.index')->with('ok', 'email enviado com sucesso');
    }
    }

    public function home(){
      return view('welcome');
    }
}
