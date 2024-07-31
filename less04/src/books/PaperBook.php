<?php

namespace umete\less04\books;

class PaperBook extends Book {
    protected string $libraryAddress;

    public function __construct($name, $author, $yearPublishing, $libraryAddress) {
        parent::__construct($name, $author, $yearPublishing);
        $this->libraryAddress = $libraryAddress;
    }

    public function getDelivery() : string {
        return $this->libraryAddress;
    }
}
