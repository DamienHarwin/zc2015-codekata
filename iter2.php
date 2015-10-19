<?php

class Cell
{
    const ALIVE = 1;
    const DEAD = 0;
    public $state = self::DEAD;
}

class Evolve
{

    public function calculateNumberOfNeighbours($cellPosition, Board $board)
    {
        $live = 0;
        $dead = 0;
        $xpos = $cellPosition[0];$ypos = $cellPosition[1];
        $xoffset = [-1,0,1];
        $yoffset = [-1,0,1];
        foreach ($xoffset as $xoff) {
            foreach ($yoffset as $yoff) {
             if($xoff == 0 && $yoff == 0) continue;
                ($board->currentState[$xpos+$xoff][$ypos+$yoff] == Cell::ALIVE)? $live++ : $dead++;
            }
        }
        return [$live, $dead];
    }

    public function calculateNextIteration(Board $board)
    {

    }

}

class Board
{
    public $boardSize;
    public $tick;
    public $currentState;
    public $nextState;

    public function __construct($boardSize = 10)
    {
        $this->boardSize = $boardSize;
        for ($i = 0;
             $i < $this->boardSize;
             $i++) {
            $this->currentState[$i] = array_fill(0, $this->boardSize - 1, 0);
            $this->nextState[$i] = $this->currentState[$i];
        }
    }

    public function populateBoard($numOfCells = 25)
    {
        $ct = $numOfCells;
        while ($ct>0) {
            $x=rand(0,$this->boardSize-1);
            $y=rand(0,$this->boardSize-1);
            if($this->currentState[$x][$y] == Cell::DEAD) {
                $this->currentState[$x][$y] = Cell::ALIVE;
                $ct--;
            }
        }
    }

    public function getPopulationStats()
    {

    }
}