<?php
//docker run --rm -v ${pwd}/hw2/:/cli php:8.2-cli php /cli/task1.php

// 1. Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. Обязательно использовать оператор return.

function addition($num1, $num2)
{
  return $num1 + $num2;
}
function subtraction($num1, $num2)
{
  return $num1 - $num2;
}

function multiplication($num1, $num2)
{
  return $num1 * $num2;
}

function division($num1, $num2)
{
  return ($num2 == 0) ? "Ошибка: деление на 0" : $num1 / $num2;
}

echo "addition: " . addition(3, 2) . PHP_EOL;
echo "subtraction: " . subtraction(3, 2) . PHP_EOL;
echo "multiplication: " . multiplication(3, 2) . PHP_EOL;
echo "division: " . division(3, 2) . PHP_EOL;
echo "division: " . division(3, 0) . PHP_EOL;
