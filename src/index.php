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

$climber_weight           = 80;     //in kg.
$original_rope_length     = 50;     //example of rope length used [m]
$rope_elasticity_constant = 115;    //Modulus of elasticity E [daN / mm2] - example for polyamide rope
$rope_cross_section       = 12;     //rope diameter [mm]

$climber      = new Climber($climber_weight);
$rope         = new Rope($original_rope_length, $rope_elasticity_constant, $rope_cross_section);
$climbingCase = new ClimbingCase(
    $climber->getWeight(),
    $rope->getOriginalRopeLength(),
    $rope->getRopeElasticityConstant(),
    $rope->getRopeCrossSection()
);

echo $climbingCase->getStaticRopeLoad();
