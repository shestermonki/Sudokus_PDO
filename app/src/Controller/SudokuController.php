<?php

namespace Sudoku\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class SudokuController
{
    public static function initRoutes($app)
    {
        $app->get('/sudoku', '\Sudoku\Controller\SudodukuController:getAllSudokus');
    }
}
