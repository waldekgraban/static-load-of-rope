<?php
/*
 *
 * Created by Waldemar Graban 2020
 *
 */

namespace Waldekgraban\StatcRopeLoad\Climber;

class Climber
{
    protected $weight;

    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getWeightInKG()
    {
        return $this->weight . ' kg.';
    }
}
