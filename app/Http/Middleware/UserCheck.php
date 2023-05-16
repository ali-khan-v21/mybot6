<?php

namespace App\Http\Middleware;

use BotMan\BotMan\Interfaces\Middleware\Received;

class UserCheck implements Received
{
    /**
     * Handle an incoming message.
     *
     * @param IncomingMessage $message
     * @param callable $next
     * @param BotMan $bot
     *
     * @return mixed
     */
    public function received($message, $next, $bot)
    {
        // $message->addExtras('custom_message_information', 'my custom value');
        $bot->reply('checking if user is in channel here');
        return $next($message);
    }
}
