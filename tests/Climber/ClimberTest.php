<?php

namespace Waldekgraban\StatcRopeLoad\Tests\Unit;

use Waldekgraban\StatcRopeLoad\Tests\TestCase;
use Waldekgraban\StatcRopeLoad\Climber\Climber;

class ClimberTest extends TestCase
{
    public function testCanInitializeByConstructor()
    {
        $climber = new Climber(80);

        $this->assertInstanceOf(Climber::class, $climber);
    }

    public function testClimbersWeightAreNumbers()
    {
        $testWeight = new Climber(80);

        $this->assertIsInt($testWeight->getWeight());
    }
}
