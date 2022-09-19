<?php

use Sudoku\Model\Player;

require_once '../src/config.php';
header("Content-type:text/plain");


$db = \Sudoku\Model\SudokuDB::getInstance();

//$players = $db->getPlayers();
print_r($players);


$player = $db->getPlayerById(13);
print_r($player);

//for ($id = 14; $id < 18; $id++);
//$deletePLayer =  $db->deletePlayer(3);

$nuevoPLayer = new \Sudoku\Model\player (is_int(null), 'teodoro', 'pepino', 'pepino@stucom.com');
//$newPLayer = $db->addPlayer($nuevoPLayer);
print_r($player);

$newUpdate = new \Sudoku\Model\player (2,'kevin', 'lovato', 'navidad@stucom.com');
$update = $db->savePlayer($newUpdate);
print_r($players);