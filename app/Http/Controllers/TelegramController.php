<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DefStudio\Telegraph\Models\TelegraphBot;

class TelegramController extends Controller
{
    public function setWebhook()
    {
        $bot = TelegraphBot::find(4);
        $response = $bot->registerWebhook()->send();
        dd($response);
    }
}
