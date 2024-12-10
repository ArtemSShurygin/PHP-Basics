<?php
//docker run --rm -v ${pwd}/hw2/:/cli php:8.2-cli php /cli/task5.php

// 5. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function recursionPowPlus(float $num, int $pow)
{
  if ($pow > 0) {
    $pow--;
    if ($pow > 0) {
      return $num * recursionPowPlus($num, $pow);
    }
    return $num;
  }
}

function recursionPowMinus(float $num, int $pow)
{
  if ($pow < 0) {
    if ($num == 0) {
      return "Ошибка: деление на 0";
    }

    $pow++;
    if ($pow < 0) {
      return 1 / $num * recursionPowMinus($num, $pow);
    }
    return 1 / $num;
  }
}
function recursionPow(float $num, int $pow)
{
  if ($pow == 0) {
    return  1;
  }
  if ($pow > 0) {
    return recursionPowPlus($num, $pow);
  }
  if ($pow < 0) {
    return  recursionPowMinus($num, $pow);
  }
}

echo recursionPow(2, 0) . PHP_EOL;
echo recursionPow(2, -3) . PHP_EOL;
echo recursionPow(0, -3) . PHP_EOL;
echo recursionPow(2, 3) . PHP_EOL;
echo recursionPow(0, 3) . PHP_EOL;
