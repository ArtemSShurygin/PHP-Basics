<?php
//docker run --rm -v ${pwd}/hw2/:/cli php:8.2-cli php /cli/task2.php

//2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation($num1, $num2, string $operation)
{
  switch ($operation) {
    case "+":
      return $num1 + $num2;
    case "-":
      return $num1 - $num2;
    case "*":
      return $num1 * $num2;
    case "/":
      return ($num2 == 0) ? "Ошибка: деление на 0." : $num1 / $num2;
    default:
      return "Ошибка: операция не распознона.";
  }
}

echo "mathOperation сложение: " . mathOperation(3, 2, "+") . PHP_EOL;
echo "mathOperation вычетание: " . mathOperation(3, 2, "-") . PHP_EOL;
echo "mathOperation умножение: " . mathOperation(3, 2, "*") . PHP_EOL;
echo "mathOperation деление: " . mathOperation(3, 2, "/") . PHP_EOL;
echo "mathOperation деление на 0: " . mathOperation(3, 0, "/") . PHP_EOL;
echo "mathOperation нераспознонная операция: " . mathOperation(3, 2, "=") . PHP_EOL;
