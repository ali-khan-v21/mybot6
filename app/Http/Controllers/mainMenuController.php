<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainMenuController extends Controller
{
    public function newConfig($bot){
        $bot->reply('starting new config conversation');
    }
    public function myConfigs($bot){
        $bot->reply('showing my configs');
    }
    public function testConfig($bot){
        $bot->reply('starting test config conversation');
    }
}
