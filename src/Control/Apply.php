<?php

$Control_Apply_arrayApply = function ($fs) {
    return function ($xs) use (&$fs) {
        $r = [];
        foreach ($fs as $f) {
            foreach ($xs as $x) {
                $r[] = $f($x);
            }
        } return $r;
    };
};
