<?php

// 1. Обработка ошибок. Посмотрите на реализацию функции в файле fwrite-cli.php в исходниках. Может ли пользователь ввести некорректную информацию (например, дату в виде 12-50-1548)? Какие еще некорректные данные могут быть введены? Исправьте это, добавив соответствующие обработки ошибок.

$address = '/code/birthdays.txt';
$name = readline("Введите имя: ");
$date = readline('Введите дату рождения в формате ДД-ММ-ГГГГ: ');

if(validate($date)){
    $data = $name . ", " . $date . "\r\n";

    $fileHandler = fopen($address, 'a');
    
    if(fwrite($fileHandler, $data)){
        echo "Запись $data добавлена в файл $address";
    }
    else {
        echo "Произошла ошибка записи. Данные не сохранены";
    }
    
    fclose($fileHandler);
}
else{
    echo "Введена некорректная информация";
}

function validate(string $date): bool {
    $dateBlocks = explode("-", $date);

    if(count($dateBlocks) < 3){
        return false;
    }

    if(isset($dateBlocks[0]) && ($dateBlocks[0] > 31 || $dateBlocks[0] < 1)) {
        return false;
    }

    if(isset($dateBlocks[1]) && ($dateBlocks[1] > 12 || $dateBlocks[1] < 1)) {
        return false;
    }

    if(isset($dateBlocks[2]) && $dateBlocks[2] > date('Y')) {
        return false;
    }

    if(isset($dateBlocks[2]) && (strlen($dateBlocks[2]) < 4 || strlen($dateBlocks[2]) > 4)) {
        return false;
    }

    return true;
}

// Ответ: нет не может, так как есть обработка ошибки, если месяц будет указан больше 12  if(isset($dateBlocks[1]) && $dateBlocks[1] > 12) {return false;}
// добавила проверки: на длину года и чтобы день и месяц не были меньше 1
