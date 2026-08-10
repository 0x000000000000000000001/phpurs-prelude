<?php

$eqIntImpl = function($a, $b) use (&$eqIntImpl) {
    return $a === $b;
};
$eqStringImpl = $eqIntImpl;
$eqNumberImpl = function($a, $b) use (&$eqNumberImpl) {
    return (float)$a === (float)$b;
};
$eqCharImpl = $eqIntImpl;
$eqBooleanImpl = $eqIntImpl;

$eqArrayImpl = function($f, $xs, $ys) use (&$eqArrayImpl) {
    if (\count($xs) !== \count($ys)) return false;
    for ($i = 0; $i < \count($xs); $i++) {
        if (!$f($xs[$i], $ys[$i])) return false;
    }
    return true;
};

$exports['eqIntImpl'] = $eqIntImpl;
$exports['eqStringImpl'] = $eqStringImpl;
$exports['eqNumberImpl'] = $eqNumberImpl;
$exports['eqCharImpl'] = $eqCharImpl;
$exports['eqBooleanImpl'] = $eqBooleanImpl;
$exports['eqArrayImpl'] = $eqArrayImpl;
return $exports;
