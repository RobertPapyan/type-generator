<?php

namespace Matemat\TypeGenerator;
use Illuminate\Support\ServiceProvider;

class TypeGeneratorServiceProvider extends ServiceProvider
{
    public function boot(){

        $this->publishes([
            __DIR__
            .'/../config/type-generator.php' => config_path('type-generator.php'),
        ], 'tg-config');
    }
    public function register(){
       /* $this->app->bind(
            TypeGenerator::class,
            $this->app['config']['type-generator']
        );*/

        $this->commands([
            Console\GenerateTypes::class,
        ]);
    }
}
