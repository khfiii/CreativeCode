<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class TelegramFacades extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'telegram';
    }
}



?>
