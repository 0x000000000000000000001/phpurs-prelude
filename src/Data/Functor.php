<?php

$arrayMap = function($f, $arr) use (&$arrayMap) {
    return array_map($f, $arr);
};

$exports['arrayMap'] = $arrayMap;
return $exports;
