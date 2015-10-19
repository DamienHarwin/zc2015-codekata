<?php
class Cell {
    const ALIVE = 1;
    const DEAD = 0;
    public $xpos;
    public $ypos;
    public $liveNeighboursCount;
    public $nextState;

    public function evolve()
    {
        $live = $dead = 0;
        foreach ( [-1,0,1] as $xoff) {
            foreach( [-1,0,1] as $yoff) {
                // implement ruleset
                if($xoff == 0 && $yoff == 0)
                    continue;
                
            }
        }
    }
}
