<?php
/*
 *
 * Created by Waldemar Graban 2020
 *
 */

namespace Waldekgraban\StatcRopeLoad\ClimbingCase;

class ClimbingCase
{
    protected $climberWeight;
    protected $originalRopeLength;
    protected $ropeElasticityConstant;
    protected $ropeCrossSection;

    public function __construct($climberWeight, $originalRopeLength, $ropeElasticityConstant, $ropeCrossSection)
    {
        $this->climberWeight          = $climberWeight;
        $this->ropeCrossSection       = $ropeCrossSection;
        $this->originalRopeLength     = $originalRopeLength;
        $this->ropeElasticityConstant = $ropeElasticityConstant;
    }

    protected function getRopeStiffness()
    {
        $ropeStiffness = ($this->ropeElasticityConstant * $this->ropeCrossSection) / $this->originalRopeLength;

        return $ropeStiffness;
    }

    public function getStaticRopeLoad()
    {
        $staticRopeLoad = ($this->climberWeight * $this->originalRopeLength) / ($this->ropeElasticityConstant * $this->ropeCrossSection);

        return round($staticRopeLoad, 2);
    }

    public function getStaticRopeLoad_another_control_method()
    {
        $staticRopeLoad = $this->climberWeight / $this->getRopeStiffness();

        return round($staticRopeLoad, 2);
    }
}
