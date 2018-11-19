<?php

namespace OOPchess;

class Pawn extends Piece implements iPiece
{
    private $type="P";

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function showPiece()
    {
      return $this->color.'-'.$this->type;
    }   
}
