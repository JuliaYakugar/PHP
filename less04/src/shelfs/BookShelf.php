<?php

namespace umete\less04\shelfs;

use umete\less04\books\Book;

class BookShelf {
    protected array $books;

    public function __construct() {
        $this->books = [];
    }

    public function addBook(Book $book) : void {
        $this->books[] = $book;
    }

    public function getAllDelivery() : array {
        $delivery = [];

        foreach ($this->books as $book) {
            $delivery[] = $book->getDelivery();
        }

        return $delivery;
    }

    public function getAllCountReads() : int {
        $allCountReads = 0;

        foreach ($this->books as $book) {
            $allCountReads += $book->getCountReads();
        }

        return $allCountReads;
    }
}
