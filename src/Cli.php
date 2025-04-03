<?php

/*
 CLI-game. Greeting a user
*/

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

/*
 Game logic
*/
function greet_user()
{
    line("Hello, this is the brain-games!");
    $name = prompt("What's your name?");
    line("Hello, $name!");
}

// greet_user();
