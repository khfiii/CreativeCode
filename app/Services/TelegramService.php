<?php
namespace App\Services;

class TelegramService {


    protected string $token;

    public function __construct() {
        $this->token = config('services.telegram.secret');
    }

    public function sendMessage(string $message)
    {
        return "Message : {$message}";
    }




}
