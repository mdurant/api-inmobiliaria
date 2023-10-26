<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     * Esto registrará cada consulta SQL que se envíe al servidor en el archivo de log log-api.log.
     */
    public function boot(): void
    {
        DB::listen(function ($query) {
            Log::channel('api')->info("SQL Query: {$query->sql}, Bindings: " . implode(',', $query->bindings));
        });
    }
}
