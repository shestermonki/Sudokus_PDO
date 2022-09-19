<?php
namespace Sudoku\Model;

class Carddeck {
  private int $id;
  private array $card;
  private \Sudoku\Model\Player $player;


  public function __construct(int $id, array $card , \Sudoku\Model\Player $player){
        $this->id = $id;
        $this->card = $card;
        $this->player = $player;
      }



  public function getId() : int { return $this->id; }
  public function setId(int $id) { $this->id = $id; }

  public function getCard() : array { return $this->card; }
  public function setCard(   array  $card) { $this->card = $card; }

  public function getPlayer() : \Sudoku\Model\Player { return $this->player; }
  public function setPlayer(    \Sudoku\Model\Player $player) { $this->player = $player; }


  public function randonCard ():\Sudoku\Model\Card{
  $cardRandom=array_rand($this->card,1);
  return $this->card[$cardRandom];
}

  public function addCard (\Sudoku\Model\Card $card){
    array_push($this->card,$card);
  }

  public function removeCard(\Sudoku\Model\Card $card){
    $i = 0;
    foreach($this->card as  $one){
      if($one == $card){
        array_splice($this->card,$i-2);
      }
    }
  }

}