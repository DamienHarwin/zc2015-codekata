<?php

// Game
// - create Board
// - populate Board
// - count # live cells
// - evolve
// - advance tick ctr

// Board
// - extent (square initially)
// - current state []
// - next state []
// - tick counter

// Evolve
// - take current state
// - scan over board using ruleset
// - compute cell state in next tick

// Ruleset
// - Any live cell with < 2 live neighbours dies
// - Any live cell with 2 or 3 live neighbours lives
// - Any live cell with > 3 live neighbours dies
// - Any dead cell with 3 live neighbours comes alive


class Board {
    public $side;
    public $tick;
    public $currentState;
    public $nextState;

    public function __construct($side = 10)
    {
        $this->createEmptyBoard($side);
        $this->populateBoard($numOfCells = 30);
    }

    public function createEmptyBoard($side)
    {
        for ($i=0;$i<$side;$i++)
        {
            $this->currentState[$i] = array_fill(0,$side-1,0);
            $this->nextState[$i] = $this->currentState[$i];
        }
    }

    public function populateBoard($numOfCells)
    {
        $ct = 0;
        do {
            $row = rand(0, $this->side - 1);
            $col = rand(0, $this->side - 1);
            $this->currentState[$row][$col] = 1;
            $ct++;
        }
        while ($ct<$numOfCells);
    }
}

class Evolve {

}

$board = new Board();
var_dump($board->currentState);