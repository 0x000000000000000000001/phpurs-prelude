<?php

$intSub = function($a, $b) use (&$intSub) {
    return $a - $b;
};
$numSub = $intSub;

$exports['intSub'] = $intSub;
$exports['numSub'] = $numSub;
return $exports;
