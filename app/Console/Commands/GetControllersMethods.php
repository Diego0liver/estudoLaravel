<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use ReflectionClass;
use ReflectionMethod;

class GetControllersMethods extends Command
{
    protected $signature = 'controllers:methods';

    protected $description = 'Get public methods of all controllers';

    public function handle()
    {
        $controllerFiles = glob(app_path('Http/Controllers/*Controller.php'));

        foreach ($controllerFiles as $controllerFile) {
            $controllerName = pathinfo($controllerFile, PATHINFO_FILENAME);
        
            dd($controllerName);
        }
    }
}
