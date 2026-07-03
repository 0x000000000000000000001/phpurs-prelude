<?php

$Data_Show_showIntImpl = function ($i) {
    return (string)$i;
};

$Data_Show_showStringImpl = function ($s) {
    return $s;
};

$Data_Show_showNumberImpl = function ($n) {
    return (string)$n;
};

$Data_Show_showCharImpl = function ($c) {
    return $c;
};

$Data_Show_showArrayImpl = function ($f) {
    return function ($xs) use (&$f) {
        return "[" . implode(",", array_map($f, $xs)) . "]";
    };
};
