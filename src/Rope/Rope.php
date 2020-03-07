<?php
/*
 *
 * Created by Waldemar Graban 2020
 *
 */

namespace Waldekgraban\StatcRopeLoad\Rope;

class Rope
{
    protected $originalRopeLength;
    protected $ropeElasticityConstant;
    protected $ropeCrossSection;

    public function __construct($originalRopeLength, $ropeElasticityConstant, $ropeCrossSection)
    {
        $this->originalRopeLength     = $originalRopeLength;
        $this->ropeElasticityConstant = $ropeElasticityConstant;
        $this->ropeCrossSection       = $ropeCrossSection;
    }

    public function getOriginalRopeLength()
    {
        return $this->originalRopeLength;
    }

    public function getRopeElasticityConstant()
    {
        return $this->ropeElasticityConstant;
    }

    public function getRopeCrossSection()
    {
        return $this->ropeCrossSection;
    }
}
