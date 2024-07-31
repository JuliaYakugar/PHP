<?php

namespace umete\less04\books;

class EBook extends Book {
    protected string $theLink;

    public function __construct($name, $author, $yearPublishing, $theLink) {
        parent::__construct($name, $author, $yearPublishing);
        $this->theLink = $theLink;
    }

    public function getDelivery() : string {
        return $this->theLink;
    }
}