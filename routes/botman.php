<?php

use BotMan\BotMan\BotManFactory;
use App\Http\Middleware\UserCheck;
use App\Conversations\StartConversation;
use BotMan\BotMan\Drivers\DriverManager;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\mainMenuController;

$botman = resolve('botman');
DriverManager::loadDriver(\BotMan\Drivers\Telegram\TelegramDriver::class);

// Create BotMan instance
BotManFactory::create($config);
$middleware=new UserCheck();

$botman->middleware->received($middleware);

$botman->hears('newconfig', mainMenuController::class . '@newConfig');
$botman->hears('myconfigs', mainMenuController::class . '@myConfigs');
$botman->hears('testconfig', mainMenuController::class . '@testConfig');

$botman->hears("mainmenu", function ($bot) {
    $bot->reply('here is the main menu');
});
$botman->hears('Hi', function ($bot) {
    $user = $bot->getUser();

    $bot->reply('hello');
});
$botman->fallback(function($bot) {
    $bot->reply('message is not valid');
});
