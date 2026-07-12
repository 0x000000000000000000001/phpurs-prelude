<?php

$arrayMap = function($f, $arr = null) use (&$arrayMap) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$arrayMap) {

            return $arrayMap(...\array_merge($__args, $more));
        };
    }
    return array_map($f, $arr);
};

$exports['arrayMap'] = $arrayMap;
return $exports;
