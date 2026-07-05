<?php

$Control_Extend_arrayExtend = function($f, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Extend_arrayExtend;
            return $Control_Extend_arrayExtend(...array_merge($__args, $more));
        };
    }
    $r = []; for($i=0; $i<count($xs); $i++) { $r[] = $f(array_slice($xs, $i)); } return $r;
};