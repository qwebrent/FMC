<?php

namespace App\Http\Controllers;

use BotMan\BotMan\Botman;
use BotMan\BotMan\Messages\Incoming\Answer;
use Illuminate\Http\Request;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function($botman, $message){
            if($message == 'hi')
            {
                $this->askName($botman);
            }
            else
            {
                $botman->reply("Write 'hi' to start a converation.");
            }
        });
        $botman->listen();
    }

    public function askName($botman)
    {
        $botman->ask("Hello! What is your name?", function(Answer $answer){
            $name = $answer->getText();

            $this->say('Nice to meet you '.$name);
        });
    }
}
