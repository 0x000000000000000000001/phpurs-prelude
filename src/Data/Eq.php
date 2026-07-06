<?php

$eqIntImpl = function($a, $b = null) use (&$eqIntImpl) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$eqIntImpl) {

            return $eqIntImpl(...array_merge($__args, $more));
        };
    }
    return $a === $b;
};
$eqStringImpl = $eqIntImpl;
$eqNumberImpl = $eqIntImpl;
$eqCharImpl = $eqIntImpl;
$eqBooleanImpl = $eqIntImpl;

$exports['eqIntImpl'] = $eqIntImpl;
$exports['eqStringImpl'] = $eqStringImpl;
$exports['eqNumberImpl'] = $eqNumberImpl;
$exports['eqCharImpl'] = $eqCharImpl;
$exports['eqBooleanImpl'] = $eqBooleanImpl;
return $exports;
