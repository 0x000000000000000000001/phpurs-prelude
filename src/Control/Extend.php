<?php

$arrayExtend = function($f, $xs) use (&$arrayExtend) {
    $r = []; for($i=0; $i<\count($xs); $i++) { $r[] = $f(\array_slice($xs, $i)); } return $r;
};

$exports['arrayExtend'] = $arrayExtend;
return $exports;
