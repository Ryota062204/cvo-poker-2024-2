<?php

use Src\Game;
use Src\Deck;
use Src\Card;

require __DIR__ . '/vendor/autoload.php';

$game = new Game();
<<<<<<< HEAD
$game = new Chips();
$game->start();
=======
$game->start();

$deck = New Deck();


foreach($deck->getCards() as $card){
    echo $card->GetType();
    echo $card->GetValue();
    echo " ";
}

>>>>>>> 20bede530845b043e52bbbb0c66c15a5700500dc
