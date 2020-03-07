<?php
/*
 *
 * Created by Waldemar Graban 2020
 *
 */

namespace Waldekgraban\StatcRopeLoad;

require_once "../vendor/autoload.php";

use Waldekgraban\StatcRopeLoad\Climber\Climber;
use Waldekgraban\StatcRopeLoad\ClimbingCase\ClimbingCase;
use Waldekgraban\StatcRopeLoad\Rope\Rope;

//example of use

$climberWeight          = 80;  //in kg.
$originalRopeLength     = 50;  //example of rope length used [m]
$ropeElasticityConstant = 115; //Modulus of elasticity E [daN / mm2] - example for polyamide rope
$ropeCrossSection       = 12;  //rope diameter [mm]

$climber      = new Climber($climberWeight);
$rope         = new Rope($originalRopeLength, $ropeElasticityConstant, $ropeCrossSection);
$climbingCase = new ClimbingCase(
    $climber->getWeight(),
    $rope->getOriginalRopeLength(),
    $rope->getRopeElasticityConstant(),
    $rope->getRopeCrossSection()
);

echo $climbingCase->getStaticRopeLoad();
