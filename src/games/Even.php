<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 1; $i <= 3; $i++) {
        $number = rand(1, 100);
        line("Question: %s", $number);
        $answer = prompt('Your answer');

        if ($number % 2 === 0 && $answer === 'yes') {
            line('Correct!');
        } elseif ($number % 2 !== 0 && $answer === 'no') {
            line('Correct!');
        } else {
            line('"yes" is wrong answer ;(. Correct answer was "no".');
            line("Let's try again, %s!", $name);
            exit();
        }
        if ($i == 3) {
            line("Congratulations, %s!", $name);
        }
    }
}
