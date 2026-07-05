<?php

$Data_Show_showIntImpl = function($i) { return (string)$i; };
$Data_Show_showStringImpl = function($s) { return $s; };
$Data_Show_showNumberImpl = function($n) { return (string)$n; };
$Data_Show_showCharImpl = function($c) { return $c; };
$Data_Show_showArrayImpl = function($f, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Show_showArrayImpl;
            return $Data_Show_showArrayImpl(...array_merge($__args, $more));
        };
    }
    return "[" . implode(",", array_map($f, $xs)) . "]";
};