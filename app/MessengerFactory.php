<?php

namespace App;

use App\Contracts\MessengerInterface;
use App\Messengers\TelegramMessenger;
use Exception;
use App\Enums\MessageType;

class MessengerFactory
{
    /**
     * @throws Exception
     */
    public function getMessenger(MessageType $messageType): MessengerInterface
    {
        return match ($messageType) {
            MessageType::TELEGRAM => new TelegramMessenger(),
            default => throw new Exception('Unexpected match value')
        };
    }
}
