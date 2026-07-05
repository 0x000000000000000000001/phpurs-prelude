<?php

$Control_Bind_arrayBind = function($xs, $f = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Bind_arrayBind;
            return $Control_Bind_arrayBind(...array_merge($__args, $more));
        };
    }
    $r = []; foreach($xs as $x) { foreach($f($x) as $y) { $r[] = $y; } } return $r;
};