<?php
/*
 CLI-game. Progression number
*/
namespace BrainGames\Games\ProgGame;

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\progression;
use function BrainGames\Engine\checkUserAnswer;
use function BrainGames\Engine\finishGame;
use function cli\line;
use function cli\prompt;

use BrainGames\Engine;

/*
Game logic
*/
function progGame()
{
    $name = greetUser();

    line("What number is missing in the progression?");

    for ($rightAnswers = 0 ; $rightAnswers < 3 ; $rightAnswers ++) {
        $progLength = rand(5, 10);
        $progStep = rand(1, 10);
        $startNumber = rand(1, 100);
        $progression = progression($startNumber, $progStep, $progLength);

        $hiddenIndex = rand(0, $progLength -1);
        $rightAnswer = $progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';
        
        line("Qestion: " . implode(' ', $progression));
        
        $userAnswer = prompt("Your answer");
        
        checkUserAnswer((int)$userAnswer, $rightAnswer, $name);
    }
    finishGame($name);
}
// progGame();