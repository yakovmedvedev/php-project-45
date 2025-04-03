<?php

/** 
 * CLI-game. Greeting a user
 * PHP version 8.3.6
 * 
 * @category CLI-games
 * @package  Games_Of_Mindproject
 * @author   Yakov Medvedev <yakovmedvedev@gmail.com>
 * @license  https://github.com/yakovmedvedev/php-project-45 MIT
 * @link     https://github.com/yakovmedvedev/php-project-45
 */

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

/**
 * Game logic
 */
function greet_user()
{
    line("Hello, this is the brain-games!");
    $name = prompt("What's your name?");
    line("Hello, $name!");
}

// greet_user();
