<?php

$intDegree = function($x) use (&$intDegree) { return abs($x); };
$intDiv = function($x, $y = null) use (&$intDiv) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$intDiv) {

            return $intDiv(...\array_merge($__args, $more));
        };
    }
    return (int)($x / $y);
};
$intMod = function($x, $y = null) use (&$intMod) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$intMod) {

            return $intMod(...\array_merge($__args, $more));
        };
    }
    return $x % $y;
};
$numDiv = function($x, $y = null) use (&$numDiv) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$numDiv) {

            return $numDiv(...\array_merge($__args, $more));
        };
    }
    return $x / $y;
};

$exports['intDegree'] = $intDegree;
$exports['intDiv'] = $intDiv;
$exports['intMod'] = $intMod;
$exports['numDiv'] = $numDiv;
return $exports;
