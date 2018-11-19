<?php

namespace OOPchess;

interface iBoard 
{
    public function showBoard();
    public function setPiece($piece, $i, $j);
    public function getPiece($i, $j);
}
