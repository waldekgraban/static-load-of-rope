<?php

namespace Waldekgraban\StatcRopeLoad\Tests\Unit;

use Waldekgraban\StatcRopeLoad\ClimbingCase\ClimbingCase;
use Waldekgraban\StatcRopeLoad\Tests\TestCase;

class PointTest extends TestCase
{
    public function testCanInitializeByConstructor()
    {
        $climber_weight           = 80;
        $original_rope_length     = 50;
        $rope_elasticity_constant = 115;
        $rope_cross_section       = 12;

        $testClimbingCase = new ClimbingCase(
            $climber_weight,
            $original_rope_length,
            $rope_elasticity_constant,
            $rope_cross_section
        );

        $this->assertInstanceOf(ClimbingCase::class, $testClimbingCase);
    }

    public function testStaticRopeLoadIsNumbers()
    {
        $climber_weight           = 80;
        $original_rope_length     = 50;
        $rope_elasticity_constant = 115;
        $rope_cross_section       = 12;

        $testClimbingCase = new ClimbingCase(
            $climber_weight,
            $original_rope_length,
            $rope_elasticity_constant,
            $rope_cross_section
        );

        $this->assertIsFloat($testClimbingCase->getStaticRopeLoad());
    }
}
