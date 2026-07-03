<?php

$Control_Bind_arrayBind = function ($xs) {
    return function ($f) use (&$xs) {
        $r = [];
        foreach ($xs as $x) {
            foreach ($f($x) as $y) {
                $r[] = $y;
            }
        } return $r;
    };
};
