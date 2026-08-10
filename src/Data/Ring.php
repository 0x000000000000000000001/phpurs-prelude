<?php

$intSub = function($a, $b) use (&$intSub) {
    return (($a - $b) << 32) >> 32;
};
$numSub = function($a, $b) use (&$numSub) {
    return (float)($a - $b);
};

$exports['intSub'] = $intSub;
$exports['numSub'] = $numSub;
return $exports;
