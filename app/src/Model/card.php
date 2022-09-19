<?php

namespace Sudoku\Model;

class Card {
  private int $id;
  private string $name;
  private int $level;
  private int  $attack;
  private int $defense;

  public function __construct(int $id,string $name, int $level, int  $attack, int $defense) {
    $this->id = $id;
    $this->name = $name;
    $this->level = $level;
    $this->attack = $attack;
    $this->defense = $defense;
  }

  public function getId() : int { return $this->id; }
  public function setId(int $id) { $this->id = $id; }

  public function getName() : string { return $this->name; }
  public function setName(string $name) { $this->name = $name; }

  public function getLevel() : int { return $this->level; }
  public function setLevel(int $level) { $this->level = $level; }

  public function getAttack() : int { return $this->attack; }
  public function setAttack(int $attack) { $this->problem = $attack; }

  public function getDefense() : int { return $this->defense; }
  public function setDefense(int $defense) { $this->solved = $defense; }

  public function fight(\Sudoku\Model\Card  $Card ) : int{
    $resul = $this->attack  * $this->level ;
    $dato = $Card->getDefense()*$Card->getLevel();
    if($resul>$dato){
      return 1;
    }else if($resul<$dato){
      return -1;
    }else{
      return 0;
    }
  }
}