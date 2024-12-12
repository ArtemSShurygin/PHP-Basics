<?php

class Ebook extends AbstractBook{

  protected string $url;

  public function __construct(int $bookId, string $name, array $authors, int $publicationYear, bool $available, string $url)
  {
    parent::__construct($bookId, $name, $authors, $publicationYear, $available);
    $this->url = $url;
  }

  function takeBookMethod() {
    echo "Вы можете скачать книгу по адрессу: $this->url." .  PHP_EOL;
  }

  public function takeBook(): void
  {
    if ($this->available) {
      echo "Вы скачали книгу \"$this->name\"." . PHP_EOL;
      $this->takenTimes++;
    } else {
      echo "Книга \"$this->name\" не доступна." . PHP_EOL;
    }
  }
}