<?php

function countdown(int $i) {
    echo $i . PHP_EOL;
    if ($i <= 0) {
        return;
    } else {
        countdown($i - 1);
    }
}

countdown(5);
