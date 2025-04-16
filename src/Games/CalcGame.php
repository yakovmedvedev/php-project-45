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

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

//Game logic
function runCalcGame()
{
   $description = "What is the result of the expression?";

   $data = [];

    for ($rightAnswers = 0; $rightAnswers < QUESTIONS_NUM; $rightAnswers++) {
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

        $question = $numberOne . $operation . $numberTwo;

        $data += [$question => $rightAnswer];

    }
    runEngine($description, $data);
}
