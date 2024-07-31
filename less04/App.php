<?php

use umete\less04\books\PaperBook;
use umete\less04\books\EBook;
use umete\less04\shelfs\BookShelf;

require_once __DIR__ . '/vendor/autoload.php';

$paperBook1 = new PaperBook("Книга бумажная 1", "Автор книги бумажной 1", 1860, "Адрес 1");
$eBook2 = new EBook("Книга электронная 2", "Автор книги электронной 2", 1960, "Ссылка 2");

$bookShelf1 = new BookShelf();
$bookShelf1->addBook($paperBook1);
$bookShelf1->addBook($eBook2);

$paperBook1->incCountReads();
$eBook2->incCountReads();
$eBook2->incCountReads();

print_r($bookShelf1->getAllDelivery());

echo $bookShelf1->getAllCountReads();

// Array
// (
//     [0] => Адрес 1
//     [1] => Ссылка 2
// )
// 3