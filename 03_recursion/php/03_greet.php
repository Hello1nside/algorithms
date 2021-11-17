<?php

function green2($name) {
    echo 'how are you, ' . $name . '?' . PHP_EOL;
}

function bye() {
    echo 'ok, bye!';
}

function greet($name) {
    echo 'hello, ' . $name . '!' . PHP_EOL;
    green2($name);
    echo 'getting ready to say bye...' . PHP_EOL;
    bye();
}

greet('Yevhenii');
