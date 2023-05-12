<?php
use App\User;
use App\Seller;
use App\Conversations\StartConversation;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\mainMenuController;

$botman = resolve('botman');

$botman->hears('newconfig',mainMenuController::class.'@newConfig');
$botman->hears('myconfigs',mainMenuController::class.'@myConfigs');
$botman->hears('testconfig',mainMenuController::class.'@testConfig');

$botman->hears("mainmenu",function($bot){
    $bot->reply('here is the main menu');
});
$botman->hears('Hi', function ($bot) {
    $user=$bot->getUser();
    
    $bot->reply('hello');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
