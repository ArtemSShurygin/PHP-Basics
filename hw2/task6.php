<?php
//docker run --rm -v ${pwd}/hw2/:/cli php:8.2-cli php /cli/task6.php

// 6. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
// 22 часа 15 минут
// 21 час 43 минуты.

// 0 часов
// 1 час
// 2-4 часа
// 5-20 часов (11-14 часов)

// 21 час
// 21-24 часа
// 25-30 часов
// ...

function currentTime(): string
{
  $hours = intval(date("h"));
  $minutes = intval(date("i"));
  $currentTime = "";


  if ($hours >= 5 && $hours < 21) {
    $currentTime .= "$hours часов";
  } else if ($hours % 10 === 1) {
    $currentTime .= "$hours час";
  } else if ($hours % 10 > 1 && $hours % 10 < 5) {
    $currentTime .= "$hours часа";
  } else {
    $currentTime .= "$hours часов";
  }

  if ($minutes >= 5 && $minutes < 21) {
    $currentTime .= " $minutes минут";
  } else if ($minutes % 10 === 1) {
    $currentTime .= " $minutes минута";
  } else if ($minutes % 10 > 1 && $minutes % 10 < 5) {
    $currentTime .= " $minutes минуты";
  } else {
    $currentTime .= " $minutes минут";
  }

  return $currentTime;
}

echo currentTime() . PHP_EOL;
