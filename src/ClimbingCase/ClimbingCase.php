<?php
/*
 *
 * Created by Waldemar Graban 2020
 *
 */

namespace Waldekgraban\StatcRopeLoad\ClimbingCase;

class ClimbingCase
{
    protected $climber_weight;
    protected $original_rope_length;
    protected $rope_elasticity_constant;
    protected $rope_cross_section;

    public function __construct($climber_weight, $original_rope_length, $rope_elasticity_constant, $rope_cross_section)
    {
        $this->climber_weight           = $climber_weight;
        $this->rope_cross_section       = $rope_cross_section;
        $this->original_rope_length     = $original_rope_length;
        $this->rope_elasticity_constant = $rope_elasticity_constant;
    }

    protected function getRopeStiffness()
    {
        $ropeStiffness = ($this->rope_elasticity_constant * $this->rope_cross_section) / $this->original_rope_length;

        return $ropeStiffness;
    }

    public function getStaticRopeLoad()
    {
        $staticRopeLoad = ($this->climber_weight * $this->original_rope_length) / ($this->rope_elasticity_constant * $this->rope_cross_section);

        return round($staticRopeLoad, 2);
    }

    public function getStaticRopeLoad_another_control_method()
    {
        $staticRopeLoad = $this->climber_weight / $this->getRopeStiffness();

        return round($staticRopeLoad, 2);
    }
}
