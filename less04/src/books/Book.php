<?php

namespace umete\less04\books;

abstract class Book {
    protected string $name;
    protected string $author;
    protected int $yearPublishing;
    protected int $countReads;

    public function __construct($name, $author, $yearPublishing) {
        $this->name = $name;
        $this->author = $author;
        $this->yearPublishing = $yearPublishing;
        $this->countReads = 0;
    }

    abstract public function getDelivery();

    public function incCountReads() : void {
        $this->countReads++;
    }

    public function getCountReads() : int {
        return $this->countReads;
    }
}