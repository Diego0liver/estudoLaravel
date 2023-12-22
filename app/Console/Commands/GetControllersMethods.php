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
            $controllerName = '\\App\\Http\\Controllers\\' . pathinfo($controllerFile, PATHINFO_FILENAME);
        
            if (class_exists($controllerName)) {
                $controllerInstance = app()->make($controllerName);
                $controllerClass = new ReflectionClass($controllerInstance);
                $controllerMethods = $controllerClass->getMethods(ReflectionMethod::IS_PUBLIC);
        
                foreach ($controllerMethods as $method) {
                 //   dd($controllerName);
                    dd($method->getName());
                }
            } else {
                echo "Controller class not found: $controllerName\n";
            }
        }
    }
}
