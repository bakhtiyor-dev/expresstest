<?php

namespace App;

use App\Contracts\MessageInterface;
use App\Enums\MessageType;
use TypeError;
use ValueError;

class Payload implements MessageInterface
{
    protected ?MessageType $messageType = null;

    /**
     * Get type of the message
     *
     * @return MessageType Eg "telegram", "whatsapp", "push"
     * @throws TypeError Unknown type in Payload
     */
    public function getType(string $message): MessageType
    {
        return MessageType::TELEGRAM;
    }

    /**
     * Get message text
     *
     * @return string
     * @throws ValueError Could not get a message from Payload
     */
    public function getMessage(): string
    {
        return 'message';
    }
}
