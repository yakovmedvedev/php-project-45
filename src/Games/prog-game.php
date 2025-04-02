<?php

namespace BrainGames\Games\ProgGame;

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\progression;
use function BrainGames\Engine\checkUserAnswer;
use function BrainGames\Engine\finishGame;
use function cli\line;
use function cli\prompt;

use BrainGames\Engine;


function progGame() {

    $progLength = rand(5, 10);
    $progStep = rand(1, 10);
    $startNumber = rand(1, 100);

    $progression = progression($startNumber, $progStep, $progLength);
    $hiddenIndex = rand(0, $progLength -1);
    $hiddenValue = $progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';

    echo "Guess the hidden number in the arithmetic progression:\n";
    echo implode(' ', $progression) . "\n";
}
// progGame();