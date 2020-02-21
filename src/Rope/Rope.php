<?php
/*
 *
 * Created by Waldemar Graban 2020
 *
 */

namespace Waldekgraban\StatcRopeLoad\Rope;

class Rope
{
    protected $original_rope_length;
    protected $rope_elasticity_constant;
    protected $rope_cross_section;

    public function __construct($original_rope_length, $rope_elasticity_constant, $rope_cross_section)
    {
        $this->original_rope_length     = $original_rope_length;
        $this->rope_elasticity_constant = $rope_elasticity_constant;
        $this->rope_cross_section       = $rope_cross_section;
    }

    public function getOriginalRopeLength()
    {
        return $this->original_rope_length;
    }

    public function getRopeElasticityConstant()
    {
        return $this->rope_elasticity_constant;
    }

    public function getRopeCrossSection()
    {
        return $this->rope_cross_section;
    }
}
