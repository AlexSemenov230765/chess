<?php
namespace OOPchess;

class Board implements iBoard 
{
    private $board=[];

    public function __construct()
    {
        for ($i=0; $i<=7; $i++) {
            for ($j=0; $j<=7; $j++) {
                $this->board[$i][$j] = null;
            }    
        }
    }

    public function showBoard()
    {
        for ($i=0; $i<=7; $i++) {
            for ($j=0; $j<=7; $j++) {
                if ( $this->board[$i][$j]===Null){
                    echo '__ ';
                }else{
                    echo $this->board[$i][$j]->showPiece().' ';
                }
                
            } 
            echo  PHP_EOL; 
        }
    }
    
    public function setPiece($piece, $i, $j) 
    {
       $this->board[$i][$j]=$piece;
    }

    public function getPiece($i, $j)
    {
        $this->board[$i][$j]=null;
     }
}
   