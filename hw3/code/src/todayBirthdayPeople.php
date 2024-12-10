<?php

function todayBirthdayPeople(array $config): string
{
  $address = $config['storage']['address'];

  if (file_exists($address) && is_readable($address)) {
    $file = fopen($address, "rb");

    $date = date('d-m-Y');
    $contents = '';
    $countBirthdays = 0;

    $contents .= "Сегодня($date) День Рождения у следующих людей:"  . PHP_EOL;
    $contentsStartLength = strlen($contents);

    while (($raw_string = fgets($file)) !== false) {
      $row = str_getcsv($raw_string);
      //var_dump($row[1]);
      if ($row[1] == " $date") {
        $countBirthdays++;
        $contents .= $row[0] . PHP_EOL;
      }
    }

    if (strlen($contents) === $contentsStartLength) {
      $contents .= "День Рождения никто не празднует" . PHP_EOL;
    }

    fclose($file);
    return $contents;
  } else {
    return handleError("Файл не существует");
  }
}
