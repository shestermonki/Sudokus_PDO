<?php

use Sudoku\Model\Card;

require_once '../src/config.php';

    
    $player = new \Sudoku\Model\player(1, 'gertrudis', 'gertrudis@stucom.com');
    var_dump($player);

    $card = new \Sudoku\Model\card(1, 'gertrudis',5,67,8);
    var_dump($card);

    $card2 = new \Sudoku\Model\card(1, 'shepito',5,67,8);
    var_dump($card);

    $card3 = new \Sudoku\Model\card(18, 'shester',5,67,8);
    var_dump($card);

    $Cards  =  array($card,$card2);

    $cardeck = new \Sudoku\Model\carddeck(1,$Cards,$player);
    var_dump($cardeck);

    echo ($card->getName()."Level : ".$card->getLevel()."Ataque :".$card->getAttack()."Defense".$card->getDefense()."<br/>");
    //echo ($card->setName()."Level : ".$card->getLevel()."Ataque :".$card->getAttack()."Defense".$card->getDefense()."<br/>");
    echo ($player->getUsername()."Email : ".$player->getEmail()."<br/>");

    echo ($card->fight($card2));

    var_dump($cardeck->getCard());
    var_dump($cardeck->getPlayer());

    echo "Carta Aleatoria";
    var_dump($cardeck->randonCard());

    echo "Agregar Carta";
    $cardeck->addCard($card3);
    var_dump($cardeck->getCard());
    
    echo "Carta Eliminada";
    $cardeck->removeCard($card2);
    var_dump($cardeck->getCard());
?>