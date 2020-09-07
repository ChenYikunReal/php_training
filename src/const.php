<?php

define("HELLO1", "hello1");
define("HELLO2", "hello2", true);
echo HELLO1;
echo PHP_EOL;
echo hello1;
echo PHP_EOL;
echo HELLO2;
echo PHP_EOL;
echo hello2;
echo PHP_EOL;

function hello() {
    echo HELLO1;
    echo PHP_EOL;
}

hello();
