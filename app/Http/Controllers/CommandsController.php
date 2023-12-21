<?php

namespace App\Http\Controllers;

use App\Console\Commands\GetControllersMethods;
use App\Models\Role;

class CommandsController extends Controller
{
    public function getControllersMethods()
    {
        $command = new GetControllersMethods();
        $result = $command->handle();

        foreach($result as $rest){
            $roleExistente = Role::where('nome', $rest)->first();
            if(!$roleExistente){
                $newRole = new Role;
                $newRole->nome = $rest['method'];
                $newRole->controller = $rest['controller'];
                $newRole->save();
            }
        }
        return redirect()->route('home');
    }
}
