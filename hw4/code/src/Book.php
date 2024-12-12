<?php

class Book extends AbstractBook
{
  protected string $libraryAddress;

  public function __construct(int $bookId, string $name, array $authors, int $publicationYear, bool $available, string $libraryAddress)
  {
    parent::__construct($bookId, $name, $authors, $publicationYear, $available);
    $this->libraryAddress = $libraryAddress;
  }

  function takeBookMethod()
  {
    echo "Вы можете получить книгу в библиотеке по адрессу: $this->libraryAddress." .  PHP_EOL;
  }

  public function takeBook(): void
  {
    if ($this->available) {
      echo "Вы взяли книгу \"$this->name\"." . PHP_EOL;
      $this->available = false;
      $this->takenTimes++;
    } else {
      echo "Книга \"$this->name\" не доступна." . PHP_EOL;
    }
  }

  public function returnBook(): void
  {
    if (!$this->available) {
      echo "Вы вернули книгу \"$this->name\"." . PHP_EOL;
      $this->available = true;
    } else {
      echo "Ошибка. Книга \"$this->name\" на месте. Обратитесь к сотруднику библиотеки." . PHP_EOL;
    }
  }
}
