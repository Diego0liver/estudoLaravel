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
        $methodsToExclude = [
            "middleware",
            "getMiddleware",
            "callAction",
            "__call",
            "authorize",
            "authorizeForUser",
            "authorizeResource",
            "dispatchNow",
            "dispatchSync",
            "validateWith",
            "validate",
            "validateWithBag",
            "CommandsController"
        ];
        $allMethods = [];

        $controllerFiles = glob(app_path('Http/Controllers/*Controller.php'));
        foreach ($controllerFiles as $controllerFile) {
            $controllerName = 'App\\Http\\Controllers\\' . pathinfo($controllerFile, PATHINFO_FILENAME);
            $methods = get_class_methods($controllerName);

            // Adiciona as funções ao array principal
            $methodsFiltered = array_diff($methods, $methodsToExclude);

            foreach ($methodsFiltered as $method) {
                // Adiciona os métodos e rotas ao array principal
                $allMethods[] = [
                    'method' => $method,
                    'controller' => pathinfo($controllerName, PATHINFO_FILENAME)
                ];
            }
        }

        return $allMethods;
        // Exibe o resultado
        // dd($allMethods);
    }
}
