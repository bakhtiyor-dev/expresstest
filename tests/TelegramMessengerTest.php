<?php

use App\Messengers\TelegramMessenger;
use PHPUnit\Framework\TestCase;

final class TelegramMessengerTest extends TestCase
{
    public function testSendMessage()
    {
        $messenger = new TelegramMessenger();

        $response = $messenger->send('message');

        $this->assertIsString($response);
    }
}
