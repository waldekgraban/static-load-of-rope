<?php

namespace Waldekgraban\StatcRopeLoad\Tests\Unit;

use Waldekgraban\StatcRopeLoad\Climber\Climber;
use Waldekgraban\StatcRopeLoad\Tests\TestCase;

class ClimberTest extends TestCase
{
    protected $climber;

    protected function setUp(): void
    {
        $climberWeigth = 80;
        $this->climber = new Climber($climberWeigth);
    }

    public function testCanInitializeByConstructor()
    {
        $this->assertInstanceOf(Climber::class, $this->climber);
    }

    public function testClimbersWeightAreNumbers()
    {
        $this->assertIsInt($this->climber->getWeight());
    }

    protected function tearDown(): void
    {
        unset($this->climber);
    }
}
