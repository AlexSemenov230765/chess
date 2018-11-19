<?php

\spl_autoload_register(function ($class) {
    $classFilename = __DIR__ . DIRECTORY_SEPARATOR . 
    \str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    require $classFilename;
});

$chessBoard = new \OOPChess\Board();
$wP = new \OOPChess\Pawn('w');
$chessBoard->setPiece($wP, 1, 4);
$chessBoard->showBoard();
echo PHP_EOL.PHP_EOL;
$chessBoard->getPiece( 1, 4);
$chessBoard->setPiece($wP, 3, 4);
$chessBoard->showBoard();


