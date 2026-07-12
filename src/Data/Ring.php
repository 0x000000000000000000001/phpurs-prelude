<?php

$intSub = function($a, $b = null) use (&$intSub) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$intSub) {

            return $intSub(...\array_merge($__args, $more));
        };
    }
    return $a - $b;
};
$numSub = $intSub;

$exports['intSub'] = $intSub;
$exports['numSub'] = $numSub;
return $exports;
