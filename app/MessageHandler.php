<?php

namespace App;

use App\Contracts\MessageInterface;
use Exception;
use Monolog\Logger;

class MessageHandler
{
    /**w
     * Handle a payload, send the message and return result
     */
    public function handle(MessageInterface $payload, MessengerFactory $messengerFactory, Logger $logger): array
    {
        try {
            $type = $payload->getType($payload->getMessage());
            $response = $messengerFactory->getMessenger($type)->send($payload->getMessage());

            return ['success' => true, 'payload' => $response];
        } catch (Exception $exception) {
            $logger->error($exception->getMessage());
            return ['success' => false, 'payload' => $exception->getMessage()];
        }
    }
}
