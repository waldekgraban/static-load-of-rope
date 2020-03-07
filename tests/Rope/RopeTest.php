<?php

namespace Waldekgraban\StatcRopeLoad\Tests\Unit;

use Waldekgraban\StatcRopeLoad\Rope\Rope;
use Waldekgraban\StatcRopeLoad\Tests\TestCase;

class CalculatorTest extends TestCase
{
    protected $rope;

    protected function setUp(): void
    {
        $originalRopeLength     = 50;
        $ropeElasticityConstant = 115;
        $ropeCrossSection       = 12;

        $this->rope = new Rope($originalRopeLength, $ropeElasticityConstant, $ropeCrossSection);
    }

    public function testCanInitializeByConstructor()
    {
        $this->assertInstanceOf(Rope::class, $this->rope);
    }

    public function testRopeOriginalRopeLengthIsNumbers()
    {
        $this->assertIsInt($this->rope->getOriginalRopeLength());
    }

    public function testRopeElasticityConstantIsNumbers()
    {
        $this->assertIsInt($this->rope->getRopeElasticityConstant());
    }

    public function testRopeCrossSectionIsNumbers()
    {
        $this->assertIsInt($this->rope->getRopeCrossSection());
    }

    protected function tearDown(): void
    {
        unset($this->rope);
    }
}
