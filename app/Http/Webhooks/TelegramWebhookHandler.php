<?php
namespace App\Http\Webhooks;

use Illuminate\Support\Facades\Log;
use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;
use DefStudio\Telegraph\Models\TelegraphChat;
use DefStudio\Telegraph\Handlers\WebhookHandler;


class TelegramWebhookHandler extends WebhookHandler
{

    public function start(): void
    {
        $fullName = $this->getFullName();
        $this->sendWelcomeMessage($fullName);
    }

    private function sendWelcomeMessage(string $fullName) : void
    {
       $this->chat->html("Hi {$fullName} 🥸 \nSelamat datang di Creative Code 👋\nPenyedia jasa joki coding terbaik ✨ \n\nApa yang kamu butuhkan?")
        ->keyboard(Keyboard::make()->row([
           Button::make('Konsultasi Tugas')->action('delete')->param('id', '42'),
           Button::make('List Harga')->url('https://test.it'),
        ])->row([
           Button::make('Bertanya ke AI')->action('update')->param('id', '43'),
           Button::make('Testimoni')->url('https://test.it'),
        ]))
       ->send();
    }

    private function getFullName() : string
    {
        $firstName = $this->message->from()->toArray()['first_name'];
        $lastName = $this->message->from()->toArray()['last_name'];
        return "{$firstName} {$lastName}";
    }

}
