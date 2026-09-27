<?php

$intSub = function($a, $b) use (&$intSub) {
    return $a - $b;
};
$numSub = function($a, $b) use (&$numSub) {
    return (float)($a - $b);
};

$exports['intSub'] = $intSub;
$exports['numSub'] = $numSub;
return $exports;
