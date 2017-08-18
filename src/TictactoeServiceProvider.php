<?php
namespace Littleled\Tictactoe;

use Illuminate\Support\ServiceProvider;

class TictactoeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/tictactoe.php' => config_path('tictactoe.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('tictactoe',function(){
            return $this->app->make('Littleled\Tictactoe\Tictactoe');
        });
    }
}
