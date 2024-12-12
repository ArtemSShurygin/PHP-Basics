<?php

class Bookcase
{
  protected int $bookcaseId;
  protected array $books = [];

  public function __construct(int $bookcaseId, array $books = [])
  {
    $this->bookcaseId = $bookcaseId;
    $this->books = $books;
  }

  public function showAllBooks(): void {
    foreach ($this->books as $book) {
      echo (($book->getAvailable()) ? "[Доступнна]    " : "[Не доступнна] ") . $book->getName() . PHP_EOL;
    }
  }
}