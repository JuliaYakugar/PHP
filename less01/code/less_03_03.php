<?php

// 3. Удаление строки. Когда мы научились искать, надо научиться удалять конкретную строку. Запросите у пользователя имя или дату для удаляемой строки. После ввода либо удалите строку, оповестив пользователя, либо сообщите о том, что строка не найдена.

$name = readline("Введите имя или дату для удаления строки: ");
$address = '/code/birthdays.txt';
$found = false;

if (file_exists($address)) {
    $fileContents = file($address);
    $newContents = [];

    foreach ($fileContents as $line) {
        if (strpos($line, $name) === false) {
            $newContents[] = $line;
        } else {
            $found = true;
        }
    }

    if ($found) {
        // $newContents = array_filter($newContents, 'strlen');
        file_put_contents($address, implode($newContents));
        echo "Строка с '$name' была удалена.\n";
    } else {
        echo "Строка с '$name' не найдена.\n";
    }
} else {
    echo "Файл '$address' не существует.\n";
}
