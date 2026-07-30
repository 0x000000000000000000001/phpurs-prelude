<?php

$arrayApply = function($fs, $xs) use (&$arrayApply) {
    $r = []; foreach($fs as $f) { foreach($xs as $x) { $r[] = $f($x); } } return $r;
};

$exports['arrayApply'] = $arrayApply;
return $exports;
