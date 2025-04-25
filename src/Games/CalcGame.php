<?php

//CLI-game. Math operations

namespace BrainGames\Games\CalcGame;

use BrainGames\Engine;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUND_COUNT;

const MIN_NUMBER = 1;
const MAX_NUMBER = 10;

function calculate(int $numberOne, int $numberTwo, string $operation): int
{
    $rightAnswer = 0;
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
    return $rightAnswer;
}

function runCalculationGame(): void
{
    $description = "What is the result of the expression?";
    $data = [];

    for ($rightAnswers = 0; $rightAnswers < ROUND_COUNT; $rightAnswers++) {
        $operators = ['+', '-', '*'];
        $operatorsRandomKey = array_rand($operators);
        $operation = $operators[$operatorsRandomKey];
        $numberOne = random_int(MIN_NUMBER, MAX_NUMBER);
        $numberTwo = random_int(MIN_NUMBER, MAX_NUMBER);

        $rightAnswer = (string) calculate($numberOne, $numberTwo, $operation);
        $question = "{$numberOne} {$operation} {$numberTwo}";
        $data[$question] = $rightAnswer;
    }
    runEngine($description, $data);
}
