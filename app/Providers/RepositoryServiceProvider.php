<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->app->bind(\App\Repositories\ProjetoRepository::class, \App\Repositories\ProjetoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\MembroRepository::class, \App\Repositories\MembroRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        //:end-bindings:
    }
}
