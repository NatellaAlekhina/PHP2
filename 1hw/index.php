<?php

use HW\app\Test;
use HW\app\Test_homework;
use HW\app_homework\Test_homework_new;

spl_autoload_register(
    callback: function(string $class)
        {
            $path1 = str_replace('\\',DIRECTORY_SEPARATOR, $class); //1. Разделитель пространства имён преобразуется в разделитель папок: / для Linux и MacOS или \ для Windows.
            print_r($path1.PHP_EOL);
            //$path2 = str_replace('_',DIRECTORY_SEPARATOR, $class);
            //print_r($path2.PHP_EOL);
            $pathToArray = explode("\\", $path1);
            $countClassName = count($pathToArray) - 1;
            $classRename = str_replace("_", DIRECTORY_SEPARATOR, $pathToArray[$countClassName]);
            $pathToArray[$countClassName] = $classRename;
            $path3 = implode(DIRECTORY_SEPARATOR, $pathToArray); //2. Знак _ в имени класса преобразуется в разделитель папок
            print_r($path3.PHP_EOL);
            require "$path1.php"; //3. Файл с кодом класса имеет расширение .php.
        }
);


$test = new Test(1,6);
echo $test->sendMessage().PHP_EOL;

$test2 = new Test_homework(2,3);
echo $test2->sendMessage().PHP_EOL;

$test3 = new Test_homework_new(5,4);
echo $test3->sendMessage().PHP_EOL;
