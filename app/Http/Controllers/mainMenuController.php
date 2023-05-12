<?php

namespace App\Http\Controllers;

use App\Conversations\newConfigConversation;
use Illuminate\Http\Request;

class mainMenuController extends Controller
{
    public function newConfig($bot){
        $bot->reply('starting new config conversation');
        $bot->startconversation(new newConfigConversation);
    }
    public function myConfigs($bot){
        $bot->reply('showing my configs');
    }
    public function testConfig($bot){
        $bot->reply('starting test config conversation');
    }
}
