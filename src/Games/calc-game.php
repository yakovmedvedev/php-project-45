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
use function BrainGames\Engine\calculate;
use function BrainGames\Engine\checkUserAnswer;
use function BrainGames\Engine\finishGame;
use function cli\line;
use function cli\prompt;
//Number of questions
use const BrainGames\Engine\QUESTIONS_NUM;
use const BrainGames\Engine\QUESTION;
use const BrainGames\Engine\ANSWER;

//Game logic
function calcGame()
{
    $name = greetUser();

    line("What is the result of the expression?");

    for ($rightAnswers = 0; $rightAnswers < QUESTIONS_NUM; $rightAnswers++) {
        $operators = ['+', '-', '*'];
        $operatorsRandomKey = array_rand($operators);
        $operation = $operators[$operatorsRandomKey];
        $numberOne = rand(0, 10);
        $numberTwo = rand(0, 10);
        // switch ($operation) {
        //     case '+':
        //         $rightAnswer = $numberOne + $numberTwo;
        //         break;
        //     case '-':
        //         $rightAnswer = $numberOne - $numberTwo;
        //         break;
        //     case '*':
        //         $rightAnswer = $numberOne * $numberTwo;
        //         break;
        // }

        // Use the calculate function from Engine.php
        $rightAnswer = calculate($numberOne, $numberTwo, $operation);

        // line("Question: $numberOne $operation $numberTwo");
        line(QUESTION . "$numberOne $operation $numberTwo");
        $userAnswer = prompt(ANSWER);

        checkUserAnswer($userAnswer, (string)$rightAnswer, $name);
    }
    finishGame($name);
}
