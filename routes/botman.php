<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Olá', BotManController::class.'@startConversation');
