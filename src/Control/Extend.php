<?php

$arrayExtend = function($f, $xs = null) use (&$arrayExtend) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$arrayExtend) {

            return $arrayExtend(...array_merge($__args, $more));
        };
    }
    $r = []; for($i=0; $i<count($xs); $i++) { $r[] = $f(array_slice($xs, $i)); } return $r;
};

$exports['arrayExtend'] = $arrayExtend;
return $exports;
