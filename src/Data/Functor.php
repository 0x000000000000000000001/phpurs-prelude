<?php

$Data_Functor_arrayMap = function ($f) {
    return function ($arr) use (&$f) {
        return array_map($f, $arr);
    };
};
