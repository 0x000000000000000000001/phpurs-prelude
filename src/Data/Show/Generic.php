<?php

$intercalate = function ($separator, $xs = null) use (&$intercalate) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function (...$more) use ($__args, &$intercalate) {
            return $intercalate(...array_merge($__args, $more));
        };
    }
    return implode($separator, $xs);
};

$exports['intercalate'] = $intercalate;
return $exports;
