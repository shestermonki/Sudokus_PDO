<?php

namespace Sudoku\Model;

// Implements JsonSerializable for implicit json_encode() serialization
class Player  {
  private int $id;
  private string $username;
  private string $email;

  public function __construct(int $id, string $username, string $email) {
    $this->id = $id;
    $this->username = $username;
    $this->email = $email;
  }

  public function getId() : int { return $this->id; }
  public function setId(int $id) { $this->id = $id; }
  public function getUsername() : string { return $this->username; }
  public function setUsername(string $username) { $this->username = $username; }
  public function getEmail() : string { return $this->email; }
  public function setEmail(string $email) { $this->email = $email; }
}