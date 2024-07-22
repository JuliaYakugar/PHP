<?php

// 4. Добавьте новые функции в итоговое приложение работы с файловым хранилищем.

$search = readline("Введите имя того, чьи данные хотите изменить: ");
$address = '/code/birthdays.txt';

if (file_exists($address)) {
    $fileContents = file($address);
    $found = false;
    $newContents = [];
    
    foreach ($fileContents as $line) {
        if (strpos($line, $search) !== false) {
            $name = readline("Введите имя: ");
            $date = readline('Введите дату рождения в формате ДД-ММ-ГГГГ: ');
            $line = $name . ", " . $date . "\r\n";
            $found = true;
        }
        $newContents[] = $line;
    }
    
    file_put_contents($address, implode($newContents));
    
    if ($found) {
        echo "Строка с '$search' была изменена'.\n";
    } else {
        echo "Строка с '$search' не найдена.\n";
    }
    
} else {
    echo "Файл '$address' не существует.\n";
}
