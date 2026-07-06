<?php

$showIntImpl = function($i) use (&$showIntImpl) { return (string)$i; };
$showStringImpl = function($s) use (&$showStringImpl) { return $s; };
$showNumberImpl = function($n) use (&$showNumberImpl) { return (string)$n; };
$showCharImpl = function($c) use (&$showCharImpl) { return $c; };
$showArrayImpl = function($f, $xs = null) use (&$showArrayImpl) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args, &$showIntImpl) {

            return $showArrayImpl(...array_merge($__args, $more));
        };
    }
    return "[" . implode(",", array_map($f, $xs)) . "]";
};

$exports['showIntImpl'] = $showIntImpl;
$exports['showStringImpl'] = $showStringImpl;
$exports['showNumberImpl'] = $showNumberImpl;
$exports['showCharImpl'] = $showCharImpl;
$exports['showArrayImpl'] = $showArrayImpl;
return $exports;
