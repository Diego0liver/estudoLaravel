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
       Mail::to('diego@hotmail.com', 'Diego')->send(new Contact([
        'fromName' => $req->input('nome'),
        'fromEmail' => $req->input('email'),
        'subject' => $req->input('assunto'),
        'message' => $req->input('message')
       ]));

       var_dump('email enviado');
    }

}
