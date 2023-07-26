<?php

use App\MessageHandler;
use App\MessengerFactory;
use App\Payload;
use Monolog\Logger;
use Monolog\Test\TestCase;

final class MessageHandlerTest extends TestCase
{
    public function testHandleTelegramMessage()
    {
        $payload = new Payload();
        $handler = new MessageHandler();

        $response = $handler->handle($payload, new MessengerFactory(), new Logger('logger'));

        $this->assertTrue($response['success']);
    }
}
