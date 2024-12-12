<?php

abstract class AbstractBook
{
  protected int $bookId;
  protected string $name;
  protected array $authors = [];
  protected int $publicationYear;
  protected bool $available;
  protected int $takenTimes = 0;


  public function __construct(int $bookId, string $name, array $authors, int $publicationYear, bool $available)
  {
    $this->bookId = $bookId;
    $this->name = $name;
    $this->authors = $authors;
    $this->publicationYear = $publicationYear;
    $this->available = $available;
  }

  public function getName(): string
  {
    return $this->name;
  }
  public function getAvailable(): bool
  {
    return $this->available;
  }
  public function getTakenTimes(): int
  {
    return $this->takenTimes;
  }

  abstract function takeBookMethod();
  abstract function takeBook();


  public function showTakenTimes(): void
  {
    echo "Книжка \"$this->name\" получена $this->takenTimes раз" . PHP_EOL;;
  }
}
