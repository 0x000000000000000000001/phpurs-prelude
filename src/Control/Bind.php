<?php

$arrayBind = function($xs, $f = null) use (&$arrayBind) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$arrayBind) {

            return $arrayBind(...\array_merge($__args, $more));
        };
    }
    $r = []; foreach($xs as $x) { foreach($f($x) as $y) { $r[] = $y; } } return $r;
};

$exports['arrayBind'] = $arrayBind;
return $exports;
