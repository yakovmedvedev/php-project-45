<?php

//CLI-game. Math operations

namespace BrainGames\Games\CalcGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\QUESTIONS_NUM;

function runCalcGame(): void
{
    $description = "What is the result of the expression?";
    $data = [];

    for ($rightAnswers = 0; $rightAnswers < QUESTIONS_NUM; $rightAnswers++) {
        $operators = ['+', '-', '*'];
        $operatorsRandomKey = array_rand($operators);
        $operation = $operators[$operatorsRandomKey];
        $numberOne = rand(1, 10);
        $numberTwo = rand(1, 10);
        $rightAnswer = '';

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
            default:
                break;
        }

        $question = "{$numberOne} {$operation} {$numberTwo}";
        $data += [$question => $rightAnswer];
    }
    runEngine($description, $data);
}
