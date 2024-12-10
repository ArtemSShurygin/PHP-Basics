<?php
function deleteFunction(array $config): string
{

  $name = readline("Введите имя: ");
  if (strlen($name) === 0 || strlen($name) > 30) {
    return handleError("Имя должно состоять миннимум из 1 символа, и не должно превышать 30 символов.");
  }

  $address = $config['storage']['address'];

  if (file_exists($address) && is_readable($address)) {
    $file = fopen($address, "rb");

    $contents = '';
    $deletePeople = [];

    while (($raw_string = fgets($file)) !== false) {
      $row = str_getcsv($raw_string);
      //var_dump($row[0]);
      if ($row[0] != $name) {
        $contents .= $row[0] . "," . $row[1] . PHP_EOL;
      } else {
        $deletePeople[] = $row[0] . "," . $row[1];
      }
    }
    fclose($file);

    $fileWrite = fopen($address, "w");
    fwrite($fileWrite, $contents);
    fclose($fileWrite);

    if ($deletePeople === []) {
      return "Удалено 0 человек из списка.";
    } else {
      $result = "Из списка удалены следущие люди:" . PHP_EOL;
      foreach ($deletePeople as $human) {
        $result .= $human . PHP_EOL;
      }
      return $result;
    }
  } else {
    return handleError("Файл не существует");
  }
}
