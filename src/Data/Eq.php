<?php

$eqIntImpl = function($a, $b = null) use (&$eqIntImpl) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$eqIntImpl) {

            return $eqIntImpl(...\array_merge($__args, $more));
        };
    }
    return $a === $b;
};
$eqStringImpl = $eqIntImpl;
$eqNumberImpl = $eqIntImpl;
$eqCharImpl = $eqIntImpl;
$eqBooleanImpl = $eqIntImpl;

$eqArrayImpl = function($f, $xs = null, $ys = null) use (&$eqArrayImpl) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$eqArrayImpl) {
            return $eqArrayImpl(...\array_merge($__args, $more));
        };
    }
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
