<?php

use Src\Game;

require __DIR__ . '/vendor/autoload.php';

$game = new Game();
$game = new Chips();
$game->start();
