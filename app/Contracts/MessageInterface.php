<?php

namespace App\Contracts;

use App\Enums\MessageType;

interface MessageInterface
{
    public function getType(string $message): MessageType;

    public function getMessage(): string;
}
