<?php

$Control_Apply_arrayApply = function($fs, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Apply_arrayApply;
            return $Control_Apply_arrayApply(...array_merge($__args, $more));
        };
    }
    $r = []; foreach($fs as $f) { foreach($xs as $x) { $r[] = $f($x); } } return $r;
};