<?php

namespace app\Messengers;

use App\Contracts\MessengerInterface;
use App\Exceptions\RemoteServiceException;
use App\Exceptions\RemoteValidationException;

class TelegramMessenger implements MessengerInterface
{

    /**
     * Send a message to Telegram
     *
     * @return string Return a string response from remote service
     *
     * @throws RemoteServiceException
     * @throws RemoteValidationException
     */
    public function send(string $message): string
    {
        return 'message sent';
    }
}
