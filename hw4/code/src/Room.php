<?php
class Room {
  protected int $roomId;
  protected array $bookcases = [];

  public function __construct(int $roomId, array $bookcases = [])
  {
    $this->roomId = $roomId;
    $this->bookcases = $bookcases;
  }
}