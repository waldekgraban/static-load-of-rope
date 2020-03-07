<?php

namespace Waldekgraban\StatcRopeLoad\Tests\Unit;

use Waldekgraban\StatcRopeLoad\ClimbingCase\ClimbingCase;
use Waldekgraban\StatcRopeLoad\Tests\TestCase;

class PointTest extends TestCase
{
    protected $climbingCase;

    protected function setUp(): void
    {
        $climberWeight          = 80;
        $originalRopeLength     = 50;
        $ropeElasticityConstant = 115;
        $ropeCrossSection       = 12;

        $this->climbingCase = new ClimbingCase($climberWeight, $originalRopeLength, $ropeElasticityConstant, $ropeCrossSection);
    }

    public function testCanInitializeByConstructor()
    {
        $this->assertInstanceOf(ClimbingCase::class, $this->climbingCase);
    }

    public function testStaticRopeLoadIsNumbers()
    {
        $this->assertIsFloat($this->climbingCase->getStaticRopeLoad());
    }

    protected function tearDown(): void
    {
        unset($this->climbingCase);
    }
}
