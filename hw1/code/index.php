<?php
//docker run --rm -v ${pwd}/code/:/cli php:8.2-cli php /cli/index.php

//docker-compose up --build

$a = 5;
$b = '05';
var_dump($a == $b);
var_dump((int) '012345');
var_dump((float) 123.0 === (int) 123.0);
var_dump(0 == 'hello, world');
//var_dump((int)'hello, world');


// Для PHP version: 7.4.33
// Не работает: RUN pecl install -o -f xdebug && docker-php-ext-enable xdebug
// echo "($a == $b)" . var_dump($a == $b) . "<br>";
// echo "((int) '012345)" . var_dump((int) '012345') . "<br>";
// echo "((float) 123.0 === (int) 123.0)" . var_dump(((float) 123.0 === (int) 123.0)). "<br>";
// echo "(0 == 'hello, world')" . var_dump((0 == 'hello, world')). "<br>";

echo "Current PHP version: " . phpversion() . "<br>";

//Используя только две числовые переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось: b = 1, a = 2. Дополнительные переменные, функции и конструкции типа list() использовать нельзя.
$a = 1;
$b = 2;

echo "a={$a} b={$b}<br>";

$b += $a;
$a = $b - $a;
$b -= $a;

echo "a={$a} b={$b}<br>";


