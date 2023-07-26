<?php

namespace App\Contracts;

interface MessengerInterface
{
    public function send(string $message): string;
}
