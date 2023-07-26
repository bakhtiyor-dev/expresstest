<?php

namespace App\Enums;
enum MessageType: string
{
    case TELEGRAM = 'telegram';

    case WHATSAPP = 'whatsapp';

    case PUSH = 'push';
}
