<?php
// docker build -t test .
//docker run -it -v ${pwd}/code/:/code/ test php app.php

//composer install
//docker run -it -v ${pwd}/code/:/code/ test composer install

//Добавлят файлы логики (перед этим добавить пути к этим файлам в composer.json)
//docker run -it -v ${pwd}/code/:/code/ test composer dump-autoload

// подключение файлов логики
// require_once('src/main.function.php');
// require_once('src/template.function.php');
// require_once('src/file.function.php');

require_once('vendor/autoload.php');

// вызов корневой функции
$result = main("/code/config.ini");
// вывод результата
echo $result;
