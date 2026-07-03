<?php

$Control_Apply_arrayApply = function ($fs, $xs) {
        $r = [];
        foreach ($fs as $f) {
            foreach ($xs as $x) {
                $r[] = $f($x);
            }
        } return $r;
};
