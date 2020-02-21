<?php

namespace Waldekgraban\StatcRopeLoad\Tests\Unit;

use Waldekgraban\StatcRopeLoad\Rope\Rope;
use Waldekgraban\StatcRopeLoad\Tests\TestCase;

class CalculatorTest extends TestCase
{
    public function testCanInitializeByConstructor()
    {
        $rope = new Rope(80, 50, 115, 12);

        $this->assertInstanceOf(Rope::class, $rope);
    }

    public function testRopeOriginalRopeLengthIsNumbers()
    {
        $rope = new Rope(80, 50, 115, 12);

        $this->assertIsInt($rope->getOriginalRopeLength());
    }

    public function testRopeElasticityConstantIsNumbers()
    {
        $rope = new Rope(80, 50, 115, 12);

        $this->assertIsInt($rope->getRopeElasticityConstant());
    }

    public function testRopeCrossSectionIsNumbers()
    {
        $rope = new Rope(80, 50, 115, 12);

        $this->assertIsInt($rope->getRopeCrossSection());
    }
}