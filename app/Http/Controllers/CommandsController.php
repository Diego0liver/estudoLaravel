<?php

namespace App\Http\Controllers;

use App\Console\Commands\GetControllersMethods;

class CommandsController extends Controller
{
    public function getControllersMethods()
    {
        $command = new GetControllersMethods();
        $result = $command->handle();
        dd($result);
        return view('show-controllers-methods', ['result' => $result]);
    }
}
