<?php

$Data_Ring_intSub = function($a, $b = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Ring_intSub;
            return $Data_Ring_intSub(...array_merge($__args, $more));
        };
    }
    return $a - $b;
};
$Data_Ring_numSub = $Data_Ring_intSub;