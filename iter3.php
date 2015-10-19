<?php

class Cell
{
    const ALIVE = 1;
    const DEAD = 0;
    public $xpos;
    public $ypos;
    public $liveNeighboursCount;
    public $nextState;
    public $state;

    public function evolve()
    {
        $live = $dead = 0;
        foreach ([-1, 0, 1] as $xoff) {
            foreach ([-1, 0, 1] as $yoff) {
                // implement ruleset
                if ($xoff == 0 && $yoff == 0) {
                    continue;
                }
                if()
            }
        }
    }
}

class Board
{
    public $size;
    public $currentState = [];
    public $nextState = [];
    public $tick = 0;
    public $cells = [];

    public $numCells = 20;

    public function createBoard ()
    {
        $ct = $this->numCells;
        while ($ct>0) {
            $x = rand(0,$this->size-1);
            $y = rand(0,$this->size-1);
            if(isset($this->currentState[$x][$y]) && $this->currentState[$x][$y] instanceof Cell)
                continue;
            $cell = new Cell();
            $cell->state = Cell::ALIVE;
            $this->currentState[$x][$y] = $cell;
            $this->cells[] = $cell;
            $ct--;
        }
    }

    public function getBoard()
    {
        return $this->currentState;
    }

    public function setNextState($
}