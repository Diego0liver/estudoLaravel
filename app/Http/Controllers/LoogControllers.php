<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LoogControllers extends Controller
{
   public function logg()
   {
    $logPath = storage_path('logs/contato.log');

    if (File::exists($logPath)) {
        $logContent = File::get($logPath);
        $logLines = explode(PHP_EOL, $logContent);

        return view('layout.logg', compact('logLines'));
    } else {
        abort(404, 'Log file not found.');
    }
   }
}

