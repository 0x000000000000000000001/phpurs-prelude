<?php

$showIntImpl = function($i) use (&$showIntImpl) { return (string)$i; };
$showStringImpl = function($s) use (&$showStringImpl) { return json_encode($s); };
$showNumberImpl = function($n) use (&$showNumberImpl) {
    $str = (string)$n;
    if (strpos($str, '.') === false && strpos($str, 'e') === false && strpos($str, 'E') === false && !is_nan($n)) {
        return $str . '.0';
    }
    return $str;
};
$showCharImpl = function($c) use (&$showCharImpl) {
    return "'" . $c . "'";
};
$showArrayImpl = function($f, $xs) use (&$showArrayImpl) {
    return "[" . implode(",", array_map($f, $xs)) . "]";
};

$exports['showIntImpl'] = $showIntImpl;
$exports['showStringImpl'] = $showStringImpl;
$exports['showNumberImpl'] = $showNumberImpl;
$exports['showCharImpl'] = $showCharImpl;
$exports['showArrayImpl'] = $showArrayImpl;
return $exports;
