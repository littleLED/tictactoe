<?php
namespace Littleled\Tictactoe\Facades;

use Illuminate\Support\Facades\Facade;

class Tictactoe extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tictactoe';
    }
}
