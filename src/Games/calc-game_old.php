<?php

/**
 * CLI-game. Math operations
 * PHP version 8.3.6
 *
 * @category CLI-games
 * @package  Games_Of_Mindproject
 * @author   Yakov Medvedev <yakovmedvedev@gmail.com>
 * @license  https://github.com/yakovmedvedev/php-project-45 MIT
 * @link     https://github.com/yakovmedvedev/php-project-45
 */

namespace BrainGames\Games\CalcGame;

use BrainGames\Engine;

use function BrainGames\Engine\greetUser;
use function BrainGames\Engine\checkUserAnswer;
use function BrainGames\Engine\finishGame;
use function cli\line;
use function cli\prompt;

/**
 * Game logic
 */
function calcGame()
{
    $name = greetUser();

    line("What is the result of the expression?");

    for ($rightAnswers = 0; $rightAnswers < 3; $rightAnswers++) {
        $operators = ['+', '-', '*'];
        $operatorsRandomKey = array_rand($operators);
        $operation = $operators[$operatorsRandomKey];
        $numberOne = rand(0, 10);
        $numberTwo = rand(0, 10);
        switch ($operation) {
            case '+':
                $rightAnswer = $numberOne + $numberTwo;
                break;
            case '-':
                $rightAnswer = $numberOne - $numberTwo;
                break;
            case '*':
                $rightAnswer = $numberOne * $numberTwo;
                break;
        }

        line("Question: $numberOne $operation $numberTwo");
        $userAnswer = prompt("Your answer");

        checkUserAnswer($userAnswer, (string)$rightAnswer, $name);

        // if ((int)$userAnswer === $rightAnswer) {
        //     line("Quite right, $name!");
        // } else {
        //     line("\033[91mAbsolutely wrong, $name!");
        //     exit("Bye-bye!\n");
        // }
    }
    finishGame($name);
}
