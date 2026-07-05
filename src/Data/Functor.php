<?php

$Data_Functor_arrayMap = function($f, $arr = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Functor_arrayMap;
            return $Data_Functor_arrayMap(...array_merge($__args, $more));
        };
    }
    return array_map($f, $arr);
};